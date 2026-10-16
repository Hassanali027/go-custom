<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\QuoteFormMail;
use App\Mail\NewsletterMail;
use Illuminate\Support\Facades\Storage;

class FormSubmitController extends Controller
{
    private $adminEmail;

    public function __construct()
    {
        $this->adminEmail = config('mail.to.address');
    }

    // Strip surrounding whitespace (incl. non-breaking spaces) so "   " fails the required rule.
    private function trimFields(Request $request, array $fields)
    {
        foreach ($fields as $field) {
            if (is_string($request->input($field))) {
                $request->merge([$field => preg_replace('/^[\s\x{00A0}\x{200B}]+|[\s\x{00A0}\x{200B}]+$/u', '', $request->input($field))]);
            }
        }
    }

    public function submitContact(Request $request)
    {
        $this->trimFields($request, ['name', 'email', 'phone', 'message']);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string'
        ]);

        dispatch(function () use ($validated) {
            try {
                Mail::to($this->adminEmail)->send(new ContactFormMail($validated));
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error('Mail error: ' . $e->getMessage());
            }
        })->afterResponse();

        if ($request->expectsJson()) {
            return response()->json(['success' => 'Thank you for contacting us! Your message has been sent successfully.']);
        }
        return back()->with('success', 'Thank you for contacting us! Your message has been sent successfully.');
    }

    public function submitQuote(Request $request)
    {
        $this->trimFields($request, ['name', 'email', 'phone', 'company_name', 'website', 'physical_address', 'message']);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            // Address is only asked for (and required) on the product page sample-kit form.
            'physical_address' => 'nullable|required_if:source_form,Product Page - Bottom Form|string|max:255',
            'width' => 'required|string|max:255',
            'length' => 'required|string|max:255',
            'depth' => 'required|string|max:255',
            'units' => 'required|string|max:255',
            'box_style' => 'required|string|max:255',
            'material' => 'nullable|string|max:255',
            'paper_stock' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
            'paper_coating' => 'nullable|string|max:255',
            'cad_sample' => 'nullable|string|max:255',
            'turn_around_time' => 'nullable|string|max:255',
            'quantity' => 'required|integer|min:1',
            'quote_file' => 'nullable|file|max:10240', // 10MB max
            'message' => 'nullable|string',
            'form_source' => 'nullable|string|max:50',
            'source_form' => 'nullable|string|max:100',
            'source_page' => 'nullable|string|max:500'
        ], [
            'box_style.required' => 'Please select a Box Style.',
            'physical_address.required_if' => 'The physical address field is required.',
        ]);

        foreach (['paper_stock', 'paper_coating', 'color'] as $field) {
            if (empty($validated[$field])) {
                $validated[$field] = 'Not Sure';
            }
        }
        if (empty($validated['cad_sample'])) {
            $validated['cad_sample'] = 'No';
        }
        if (empty($validated['source_page'])) {
            $validated['source_page'] = $request->headers->get('referer');
        }

        if (empty($validated['form_source'])) {
            $referer = $request->headers->get('referer', '');
            if (str_contains($referer, '/product/') || $request->is('product/*')) {
                $validated['form_source'] = 'product';
            } else {
                $validated['form_source'] = 'quote';
            }
        }

        if ($request->hasFile('quote_file')) {
            $path = $request->file('quote_file')->store('quotes', 'public');
            $validated['quote_file_path'] = $path;
        }

        dispatch(function () use ($validated) {
            try {
                Mail::to($this->adminEmail)->send(new QuoteFormMail($validated));
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error('Mail error: ' . $e->getMessage());
            }
        })->afterResponse();

        if ($request->expectsJson()) {
            return response()->json(['success' => 'Quote submitted successfully!']);
        }
        return back()->with('success', 'Quote submitted successfully!');
    }

    public function submitNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255'
        ]);

        dispatch(function () use ($validated) {
            try {
                Mail::to($this->adminEmail)->send(new NewsletterMail($validated['email']));
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error('Mail error: ' . $e->getMessage());
            }
        })->afterResponse();

        if ($request->expectsJson()) {
            return response()->json(['success' => 'Thank you for subscribing to our newsletter!']);
        }
        return back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
