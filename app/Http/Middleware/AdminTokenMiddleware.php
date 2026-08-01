<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminTokenMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $configuredToken = (string) config('services.admin_token', '');

        if ($configuredToken === '') {
            if (app()->environment('production')) {
                abort(503, 'Admin access is not configured.');
            }

            return $next($request);
        }

        $token = (string) $request->query('token');

        if ($token === '') {
            $header = $request->header('X-Admin-Token');
            $token = is_string($header) ? $header : '';
        }

        if ($token === '') {
            $cookie = $request->cookie('admin_token');
            $token = is_string($cookie) ? $cookie : '';
        }

        if (! hash_equals($configuredToken, $token)) {
            abort(403);
        }

        $response = $next($request);

        return $response->withCookie(cookie(
            'admin_token',
            $configuredToken,
            720,
            '/',
            null,
            app()->isProduction(),
            true,
            false,
            'Lax',
        ));
    }
}
