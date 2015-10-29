<?php

namespace App\Http\Middleware;

use Closure;
use Debugbar;

class Route {

    public function __construct()
    {

    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		    Debugbar::info(__FILE__ . ':' . __LINE__ . '▼Controllerのコンストラクタで指定した場合に呼び出される前処理：Kernel.php,MemberControllerのコンストラクタで指定');
        return $next($request);
    }
}
