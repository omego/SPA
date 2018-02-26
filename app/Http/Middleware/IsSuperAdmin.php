<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsSuperAdmin
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
    if ($request->is('scaffold-dashboard'))//If user is accessing dashboard for super admin
     {
        if (!Auth::user()->hasPermissionTo('spa dashboard'))
     {
            return abort(401, 'Unauthorized action.');
        }
     else {
            return $next($request);
        }
    }
    if ($request->is('scaffold-users'))//If user is accessing dashboard for super admin
     {
        if (!Auth::user()->hasPermissionTo('spa users'))
     {
            return abort(401, 'Unauthorized action.');
        }
     else {
            return $next($request);
        }
    }
    if ($request->is('scaffold-roles'))//If user is accessing dashboard for super admin
     {
        if (!Auth::user()->hasPermissionTo('spa roles'))
     {
            return abort(401, 'Unauthorized action.');
        }
     else {
            return $next($request);
        }
    }
    if ($request->is('scaffold-permissions'))//If user is accessing dashboard for super admin
     {
        if (!Auth::user()->hasPermissionTo('spa permissions'))
     {
            return abort(401, 'Unauthorized action.');
        }
     else {
            return $next($request);
        }
    }
    return $next($request);
  }

}
