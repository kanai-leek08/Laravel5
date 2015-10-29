<?php

namespace App\Http\Middleware;

use Closure;
use Debugbar;

class Only {

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
        Debugbar::info('');
		    Debugbar::info(__FILE__ . ':' . __LINE__ . '▼OnlyMiddleware処理：MemberControllerのindex時のみの前処理');
        return $next($request);
    }
}
