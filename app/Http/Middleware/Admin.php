<?php

namespace App\Http\Middleware;
use  App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role = Role::where('code_role','Ad1')->first();
        if(Auth::user() && Auth::user()->role_id == $role->id ){
            return $next($request);
        }
        return redirect('admin/dashboard');
    }
}
