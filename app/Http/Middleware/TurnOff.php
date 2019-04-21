<?php

namespace App\Http\Middleware;

use Closure;

use App\MainInfo;

class TurnOff
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
        $maininfo = MainInfo::where('info','status')->get();
        if ($maininfo[0]->status == '1') {
            return $next($request);
        }
        else
        {
            return redirect('websiteoff');
        }
    }
}
