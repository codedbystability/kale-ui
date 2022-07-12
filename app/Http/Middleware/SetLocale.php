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
        $lcl = $request->segment(1);
        if(empty($lcl))
         {$lcl = 'en';}

        app()->setLocale($lcl);
        return $next($request);
    }
}
