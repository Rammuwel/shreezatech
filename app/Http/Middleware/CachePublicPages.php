<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CachePublicPages
{
    /**
     * Routes that must never be cached (their output depends on state).
     *
     * @var array<int, string>
     */
    protected array $except = [
        'newsletter/unsubscribe/*',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $this->shouldCache($request, $response)) {
            return $response;
        }

        foreach ($response->headers->getCookies() as $cookie) {
            $response->headers->removeCookie($cookie->getName(), $cookie->getPath(), $cookie->getDomain());
        }

        $response->headers->remove('Set-Cookie');
        $response->headers->remove('Pragma');
        $response->headers->remove('Expires');
        $response->headers->set('Cache-Control', 'public, s-maxage=300, stale-while-revalidate=600');

        return $response;
    }

    private function shouldCache(Request $request, Response $response): bool
    {
        if (! $request->isMethod('GET')) {
            return false;
        }

        if ($request->headers->has('X-Livewire')) {
            return false;
        }

        if ($request->user()) {
            return false;
        }

        if ($response->getStatusCode() !== Response::HTTP_OK) {
            return false;
        }

        $contentType = $response->headers->get('Content-Type', '');

        if (! str_contains($contentType, 'text/html')) {
            return false;
        }

        if (! $request->hasSession()) {
            return false;
        }

        foreach ($this->except as $pattern) {
            if ($request->is($pattern)) {
                return false;
            }
        }

        $flash = $request->session()->get('_flash', []);

        if (! empty($flash['new'])) {
            return false;
        }

        return true;
    }
}
