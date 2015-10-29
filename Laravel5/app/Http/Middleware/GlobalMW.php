<?php

namespace App\Http\Middleware;

use Closure;
use Debugbar;

class GlobalMW {

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
        Debugbar::info("▼Debugbar::info('')でココに出力されるので開発中のデバッグに便利");
		    Debugbar::info(__FILE__ . ':' . __LINE__ . '▼全Controllerの前処理:Kernel.phpで指定：例 ログインチェック、権限チェックなど');
        return $next($request);
    }
}
