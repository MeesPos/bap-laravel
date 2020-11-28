<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()) {
            $user = Auth::user();
        } else {
            return redirect('login')->with('error', 'U bent nog niet ingelogd!');
        }

        if($user->admin != true) {
            return redirect('/')->with('error', 'U bent geen admin!');
        }

        return $next($request);
    }
}
