<?php

namespace App\Http\Middleware;

use Closure;

class FrontLangSupport
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
        \App::setLocale($request->cookie('locale_front'));
        return $next($request);
    }
}
