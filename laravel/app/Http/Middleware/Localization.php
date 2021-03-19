<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( Request $request, Closure $next)
    {
        if(session()->has('locale')){
            App::setlocale(session()->get('locale'));
        }

        return $next($request);
    }
}
