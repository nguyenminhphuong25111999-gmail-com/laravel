<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogedIn
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
        // Nếu người dùng đã đăng nhập thì chuyển về trang admin homme => trang chủ dashboard
        if(Auth::check()){
            return redirect()->intended('admin/home');
        }
        return $next($request);
    }
}
