<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminAccess
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
        $roles = $request->user()->roles->pluck('name')->toArray();
        if (!in_array('admin',$roles)){
            return response('<h1>403 Forbidden</h1><p>You are not authorized to view this Page</p>',403);
        }
        return $next($request);
    }
}
