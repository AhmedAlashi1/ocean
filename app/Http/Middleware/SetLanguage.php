<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLanguage
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
        // تحقق من وجود لغة محددة في الجلسة
        if (!Session::has('locale')) {
            Session::put('locale', 'en'); // اللغة الافتراضية الإنجليزية
        }

        App::setLocale(Session::get('locale'));

        return $next($request);
    }
}
