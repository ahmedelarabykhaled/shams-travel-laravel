<?php

namespace App\Http\Middleware;

use Closure;
use App\MainInfo;

class Language
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
        $MainInfoLang = MainInfo::where('info','lang')->get();
        $lang = $MainInfoLang[0]->content;
        app()->setLocale($lang);
        return $next($request);
    }
}
