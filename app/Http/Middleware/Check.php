<?php

namespace App\Http\Middleware;

use Closure;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$param)
    {
        echo $param;
        //如果传来的id不等于1则跳转到登录页面
        echo 'http 拦截<br/>';
        if($request->input('id') !=1 ){
            return redirect('login');
        }
        return $next($request);
    }
    public function terminate($request,$response){
        echo '我结束时调用';
    }
}
