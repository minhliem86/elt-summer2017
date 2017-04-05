<?php namespace App\Http\Middleware;

use Closure;
use Session;

class GetCampainMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($request->has('utm_campaign') && $request->has('utm_medium') && $request->has('utm_source')){

		}
		return $next($request);
	}

}
