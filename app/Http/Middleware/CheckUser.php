<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      if ($request->session()->get('user_email') === null) {
          return redirect('/login');
    }
else{
    return $next($request);

}
    }
    }