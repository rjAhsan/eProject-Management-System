<?php

namespace App\Http\Middleware;

use Closure;

class CheckFaculty
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

    if($request->session()->get('UserType')=="Faculty")
    {
        return $next($request);

    }
        return redirect('/Aclerror');

    }
}
