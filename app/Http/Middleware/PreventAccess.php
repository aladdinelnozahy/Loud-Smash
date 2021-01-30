<?php

namespace App\Http\Middleware;

use Closure;

class PreventAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session()->get('u_role')) {
            // return 'access denid';
            return redirect()->Route('admin.login');
        }
        return $next($request);
    }
}
