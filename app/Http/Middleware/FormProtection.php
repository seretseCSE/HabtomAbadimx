<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

class FormProtection
{
    /**
     * The rate limiter instance.
     */
    protected static $limiter;

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response|RedirectResponse|JsonResponse)  $next
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse|JsonResponse
    {
        // Check for honeypot fields
        if ($this->hasHoneypot($request)) {
            return response()->json(['message' => 'Spam detected'], 422);
        }

        // Apply rate limiting
        $key = 'form_protection:' . $this->resolveRequestSignature($request);
        $maxAttempts = 3;
        $decayMinutes = 1;
        
        $attempts = Cache::get($key, 0);
        
        if ($attempts >= $maxAttempts) {
            $seconds = 60; // 1 minute in seconds
            return response()->json([
                'message' => 'Too many attempts. Please try again in ' . $seconds . ' seconds.',
                'retry_after' => $seconds
            ], 429);
        }
        
        Cache::put($key, $attempts + 1, $decayMinutes * 60);

        $response = $next($request);

        // Add rate limiting headers (only for Response objects, not RedirectResponse)
        if ($response instanceof Response) {
            $response->headers->set('X-RateLimit-Limit', (string)$maxAttempts);
            $response->headers->set('X-RateLimit-Remaining', (string)max(0, $maxAttempts - ($attempts + 1)));
            $response->headers->set('X-RateLimit-Reset', (string)($decayMinutes * 60));
        }

        return $response;
    }

    /**
     * Determine if the request contains honeypot data.
     */
    protected function hasHoneypot(Request $request): bool
    {
        // Check common honeypot field names
        $honeypotFields = ['website', 'email_confirm', 'phone2', 'address', 'comment', 'url'];
        
        foreach ($honeypotFields as $field) {
            if ($request->filled($field)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Resolve the rate limiting key for the request.
     */
    protected function resolveRequestSignature(Request $request): string
    {
        return sha1($request->ip() . '|' . $request->userAgent());
    }
}
