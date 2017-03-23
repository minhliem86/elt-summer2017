<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use Notification;

class CheckloginedMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(Auth::check() && Auth::user()->hasRole('Admin')){
			Notification::error("You're logined!");
			return redirect()->route('admin');
		}
		return $next($request);
	}

}
