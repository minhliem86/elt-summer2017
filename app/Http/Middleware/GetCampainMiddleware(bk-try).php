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
			try{
				$campaign = \DB::connection('corporat_marketing')->table('campaign')->select('id','name')->where('name',$request->get('utm_campaign'))->first();
				if($campaign){
					$id_campaign = $campaign->id;
					Session::put('campaign',$id_campaign);
				}

			}
			catch(\Exception $e){
				\Log::error($e);
				return $next($request);
			}

			try{
				$source = \DB::connection('corporat_marketing')->table('media')->select('id','name')->where('name',$request->get('utm_source'))->first();

				if($source){
					$id_source = $source->id;
					Session::put('source',$id_source);
				}

			}
			catch(\Exception $e){
				\Log::error($e);
				return $next($request);
			}

			try{
				$medium = $request->get('utm_medium');
				Session::put('medium',$medium);
			}
			catch(\Exception $e){
				\Log::error('Can not set Session Medium');
				return $next($request);
			}

		}
		return $next($request);
	}

}
