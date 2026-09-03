<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanonicalTrailingSlash
{
    /**
     * Redirect public HTML pages to their trailing-slash URL.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!in_array($request->method(), ['GET', 'HEAD'], true)) {
            return $next($request);
        }

        $path = trim($request->path(), '/');

        // Keep the homepage, backend, API endpoints, and real files unchanged.
        if ($path === ''
            || str_starts_with($path, 'admin/') || $path === 'admin'
            || str_starts_with($path, 'api/') || $path === 'api'
            || str_starts_with($path, 'storage/')
            || str_starts_with($path, '_debugbar/')
            || str_contains(basename($path), '.')) {
            return $next($request);
        }

        if (!str_ends_with($request->getPathInfo(), '/')) {
            $url = $request->getSchemeAndHttpHost() . '/' . $path . '/';

            if ($request->getQueryString()) {
                $url .= '?' . $request->getQueryString();
            }

            return redirect()->to($url, 301);
        }

        return $next($request);
    }
}
