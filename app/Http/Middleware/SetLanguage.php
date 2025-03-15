<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

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
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        } else {
            // إذا لم تكن هناك جلسة، استخدم الإنجليزية افتراضيًا
            App::setLocale('en');
            session(['locale' => 'en']); // ضبط الجلسة على 'en'
        }
        return $next($request);
    }
}
