<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class Admin
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
        $name = "camnh";
        if ($name != "camnh") {
            return redirect('/');
        }
        return $next($request);
    }
}
