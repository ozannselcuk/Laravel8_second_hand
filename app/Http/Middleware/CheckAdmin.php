<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        $userRoles = Auth::user()->roles->pluck('name');
        #dd($userRoles);
        If (!$userRoles->contains('Admin')) {

            return redirect(route('adminLogin'))->with('error', 'you do not have permission');
        }
        return $next($request);
    }
}
