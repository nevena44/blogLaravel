<?php

namespace App\Http\Middleware;

use Closure;

class IsAdminMiddleware
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
        if(!session()->has('user'))
            return redirect()->back()->with('poruka','Niste ulogovani');

        if(session()->get('user')->Naziv!='Admin')
            return redirect()->back()->with('poruka','Nisi ADMIN!');

        return $next($request);
    }
}
