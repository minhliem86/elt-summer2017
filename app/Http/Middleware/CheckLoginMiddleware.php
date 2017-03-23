<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use Notification;

class CheckLoginMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(!Auth::check() || !Auth::user()->hasRole('Admin')){
			Notification::error("You're must login with Admin Permission!");
			return redirect()->route('admin.getlogin');
		}
		return $next($request);
	}

}
