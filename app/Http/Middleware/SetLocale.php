<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
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
        
        $locale = $request->segment(1);

        // Allowed locale: en and fr
        if (in_array($locale, ['en', 'fr'])) {
            app()->setLocale($locale);
        }
        // all others return locale en
        else {
            app()->setLocale('en');
        }


        return $next($request);
    }
}
