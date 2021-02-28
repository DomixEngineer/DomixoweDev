<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if ( isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true )
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('admin-login');
        }
    }
}
