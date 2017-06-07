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

	public $redirect = route('f.getlogin');

	public function __construct()
	{
		$this->auth = Auth::client();
	}
	public function handle($request, Closure $next)
	{
		if(!$this->auth()->check()){
			return redirect($this->redirect)->withErrors('error','Vui lòng đăng nhập.');
		}
		return $next($request);
	}

}
