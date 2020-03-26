<?php

namespace MayIFit\Core\Translation\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class TranslationMiddleware
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
        if (Auth::user()) {
            App::setLocale(Auth::user()->language);
        } else if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            App::setLocale(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
        }
        return $next($request);
    }
}
