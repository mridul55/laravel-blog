<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class customAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $cAuth = auth()->user()->role;
        if($cAuth == 1 ){
            return redirect()->route('website.about');
        }
        return $next($request);
    }
}
