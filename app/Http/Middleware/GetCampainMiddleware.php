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
			$id_campaign = \DB::connection('corporat_marketing')->table('campaign')->select('id','name')->where('name',$request->get('utm_campaign'))->first()->id;
			$medium = $request->get('utm_medium');
			$id_source = \DB::connection('corporat_marketing')->table('media')->select('id','name')->where('alias',$request->get('utm_source'))->first()->id;
			Session::put('campaign',$id_campaign);
			Session::put('medium',$medium);
			Session::put('source',$id_source);
		}
		return $next($request);
	}

}
