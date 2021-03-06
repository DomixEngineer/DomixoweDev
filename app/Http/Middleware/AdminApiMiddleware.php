<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Objects\AuthManager;
use App\Objects\StateManager;

class AdminApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $authManager = new AuthManager();
        $stateManager = new StateManager();
        if ($authManager->checkLoginSession())
        {
            return $next($request);
        }
        else
        {
            return $stateManager->unauthorized();
        }
    }
}
