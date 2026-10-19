<?php

namespace App\Http\Middleware;

use App\Support\SpamGuard;
use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

/**
 * Drops bot submissions to the public quote form endpoint.
 *
 * Bot-only failures (honeypot, missing token, too fast) get the same success
 * response a real submission gets, so bots can't tell they were filtered, and
 * nothing is emailed. A wrong captcha or an expired page can happen to a real
 * visitor, so those get a normal validation error instead.
 */
class FormSpamGuard
{
    public function handle($request, Closure $next)
    {
        if (!$request->isMethod('post')) {
            return $next($request);
        }

        $reason = SpamGuard::reject($request);
        if ($reason === false) {
            return $next($request);
        }

        Log::warning('Form submission dropped as spam', [
            'reason' => $reason,
            'path' => $request->path(),
            'source' => $request->input('source_form'),
            'ip' => $request->ip(),
            'ua' => substr((string) $request->userAgent(), 0, 200),
        ]);

        if (in_array($reason, SpamGuard::SILENT_REASONS, true)) {
            $message = 'Quote submitted successfully!';
            if ($request->expectsJson()) {
                return response()->json(['success' => $message]);
            }
            return back()->with('success', $message);
        }

        $messages = [
            'expired' => 'This page has expired. Please refresh the page and try again.',
            'fast' => 'Please wait a few seconds and submit again.',
            'captcha' => 'Please solve the addition correctly.',
        ];

        throw ValidationException::withMessages([
            SpamGuard::ANSWER_FIELD => $messages[$reason] ?? $messages['captcha'],
        ]);
    }
}
