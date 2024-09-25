<?php

namespace App\Http\Middleware;

use App\Models\CustomAuthToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!CustomAuthToken::getToken($request->token, $request->user_id)) {
            return response(['auth error'], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
