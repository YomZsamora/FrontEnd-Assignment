<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateUser
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
        $value = session('is_logged_in');

        if($value == TRUE) {
            return $next($request);
        }
        else {
            $request->session()->flash('not_logged_in', 'You are not logged in! You have to be logged in to purchase products. ');
            return redirect('/#GENDER');
        }
    }
}
