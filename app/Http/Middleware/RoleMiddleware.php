<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $user_role): Response
    {

        if ($request->user()->user_role != $user_role) {
            abort(404);
        }


        return $next($request);
    }
}
