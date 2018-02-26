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
        if (Auth::user()->hasPermissionTo('view goals')) //If user has this //permission
    {
            return $next($request);
        }

        if ($request->is('scaffold-users'))//If user is creating a post
         {
            if (!Auth::user()->hasPermissionTo('edit users'))
         {
                return abort(401, 'Unauthorized action.');
            }
         else {
                return $next($request);
            }
        }

        if ($request->is('initiative/*/edit'))//If user is editing initiative
         {
            if (!Auth::user()->hasPermissionTo('edit initiatives'))
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
