<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class IsAdmin
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
        if (Auth::check()) {
            $users = Auth::user();
            if ($users->role == 1) {
                return $next($request);
            } else {
                return redirect()->back()->with('message', 'Bạn không có quyền vô đây');
            }
        } else {
            return redirect()->route('admin.getLogin');
        }
    }
}
