<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ContactRepository;
use Session;

class ContactController extends Controller {

	protected $contactRepository;

	public function __construct(ContactRepository $contact){
		$this->contactRepository = $contact;
	}

	public function getIndex()
	{
		$list_city = $this->contactRepository->getListCity();

		return view('Frontend::pages.contact',compact('list_city'));
	}

	public function postRegister(Request $request)
	{
		$data = [
			'fullname' => $request->input('fullname'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
			'id_city' => $request->input('id_city'),
			'id_center' => $request->input('id_center'),
			'study_ila' => $request->input('study_ila'),
		];
		$this->contactRepository->postCreate($data);

		$data2 = [
			'id_city' => $request->input('id_city'),
			'id_center' => $request->input('id_center'),
			'id_program' => 16,
			'landing_page' => str_replace('http://'.$request->server->get('SERVER_NAME'),'',$request->url()),
			'fullname' => $request->input('fullname'),
			'email' => $request->input('email'),
			'phone' => $request->input('phone'),
			'mobile' => $request->input('phone'),
			'study_ila' => $request->input('study_ila'),
			'status' => 1,
			'is_run_cron' => 0
		];
		if(Session::has('campaign') && Session::has('medium') && Session::has('source')){
			$data2['id_campaign'] = Session::pull('campaign');
			$data2['id_media'] = Session::pull('source');
			$data2['ga_medium'] = Session::pull('medium');
			$str =  str_replace('http://'.$request->server->get('SERVER_NAME'),'',\URL::previous());
			$arr_str = explode('?', $str);
			$data2['landing_page'] = $arr_str[0];
		}else{
			$data2['landing_page'] = str_replace('http://'.$request->server->get('SERVER_NAME'),'',\URL::previous());
		}
		\DB::connection('corporat_marketing')->table('customer')->insert($data2);
		Session::flash('register-status', 'success');
		return redirect()->route('f.getThanks');
	}

	public function getThanks()
	{
		if(!Session::has('register-status')) return redirect()->route('f.homepage');
		return view('Frontend::pages.thanks');
	}

	public function postAjaxCenter(Request $request)
	{
		if(!$request->ajax())
		{
			App::abort('Frontend::errors.404', 'message');
		}else{
			$id_city = $request->input('id_city');
			$list_center = $this->contactRepository->getListCenter($id_city);
			$view = view('Frontend::ajax.center',compact('list_center'))->render();
			return response()->json(['rs'=>$view]);
		}
	}
}
