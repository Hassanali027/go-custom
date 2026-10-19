<?php

namespace App\Support;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;

/**
 * Server-side anti-bot checks for the public quote forms.
 *
 * Every guarded form embeds (via components/spam-guard-fields):
 *   - fsg_t        : encrypted token { issued time, expected captcha sum or null, nonce }
 *   - fsg_site     : honeypot text field, hidden from humans, must stay empty
 *   - human_answer : (captcha forms only) the visitor's answer to "a + b ="
 *
 * The math question is generated here, so the browser JS is not the only
 * thing checking the answer.
 */
class SpamGuard
{
    const TOKEN_FIELD = 'fsg_t';
    const HONEYPOT_FIELD = 'fsg_site';
    const ANSWER_FIELD = 'human_answer';

    /** Humans need at least this long to fill a form. */
    const MIN_SECONDS = 3;
    /** A rendered page is considered stale after this long. */
    const MAX_SECONDS = 6 * 3600;

    /** Reasons that only a bot can trigger; the bot gets a fake "thank you". */
    const SILENT_REASONS = ['honeypot', 'token', 'fast'];

    /**
     * Encrypted token for a form without a captcha.
     */
    public static function token()
    {
        return self::makeToken(null);
    }

    /**
     * Encrypted token plus the two numbers for a form with a math captcha.
     *
     * @return array{a:int,b:int,token:string}
     */
    public static function captcha()
    {
        $a = random_int(1, 9);
        $b = random_int(1, 9);

        return ['a' => $a, 'b' => $b, 'token' => self::makeToken($a + $b)];
    }

    /**
     * Returns false when the request looks human, otherwise one of:
     * honeypot, token, fast (bots) or expired, captcha (can happen to people).
     *
     * @return false|string
     */
    public static function reject(Request $request)
    {
        if (trim((string) $request->input(self::HONEYPOT_FIELD)) !== '') {
            return 'honeypot';
        }

        $payload = self::readToken($request->input(self::TOKEN_FIELD));
        if ($payload === null) {
            return 'token';
        }

        $age = time() - (int) $payload['t'];
        if ($age < self::MIN_SECONDS) {
            return 'fast';
        }
        if ($age > self::MAX_SECONDS) {
            return 'expired';
        }

        if ($payload['c'] !== null) {
            $answer = trim((string) $request->input(self::ANSWER_FIELD));
            if ($answer === '' || (int) $answer !== (int) $payload['c']) {
                return 'captcha';
            }
        }

        return false;
    }

    private static function makeToken($captchaSum)
    {
        return encrypt(json_encode([
            't' => time(),
            'c' => $captchaSum,
            'n' => bin2hex(random_bytes(4)),
        ]));
    }

    /**
     * @return array|null  ['t' => int, 'c' => int|null] or null when the token is not ours.
     */
    private static function readToken($token)
    {
        if (!is_string($token) || $token === '') {
            return null;
        }

        try {
            $payload = json_decode(decrypt($token), true);
        } catch (DecryptException $e) {
            return null;
        }

        if (!is_array($payload) || !isset($payload['t']) || !array_key_exists('c', $payload)) {
            return null;
        }

        return $payload;
    }
}
