<?php namespace App\Modules\Frontend\Middlewares;

use Closure;
use Auth;

class CheckloginMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */

	protected $auth;

	public function __construct()
	{
		$this->auth = Auth::client();
	}
	public function handle($request, Closure $next)
	{
		if(!$this->auth->check()){
			return redirect()->route('f.getlogin')->withErrors('error','Vui lòng đăng nhập.');
		}
		return $next($request);
	}

}
