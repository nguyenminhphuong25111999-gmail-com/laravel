<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogedOut
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
        //Nếu tài khoản là guest là chưa đăng nhập thì chuyển học về trang login
        if(Auth::guest()){
            return redirect()->intended('login');
        }
        // Sau khi có 2 cái middleware thì chúng ta đăng ký nó ở Kernel.php
        return $next($request);
    }
}
