<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ClearanceMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {        
        if (Auth::user()->hasPermissionTo('View Goals')) //If user has this //permission
    {
            return $next($request);
        }

        if ($request->is('goal/create'))//If user is creating a post
         {
            if (!Auth::user()->hasPermissionTo('Create Goals'))
         {
                abort('401');
            } 
         else {
                return $next($request);
            }
        }

        if ($request->is('goal/*/edit')) //If user is editing a post
         {
            if (!Auth::user()->hasPermissionTo('Edit Goals')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a post
         {
            if (!Auth::user()->hasPermissionTo('Delete Goals')) {
                abort('401');
            } 
         else 
         {
                return $next($request);
            }
        }

        return $next($request);
    }
}