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

		return view('Frontend::pages.contact2',compact('list_city'));
	}

	public function postRegister(Request $request)
	{
		$rule = array(
			'fullname' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
			'id_city' => 'required|numeric',
			'id_center' => 'required|numeric',
			'study_ila' => 'required|numeric',
		);
			
		$valid = \Validator::make($request->all(), $rule, [
			'fullname.required' => 'Vui lòng nhập họ tên',
			'email.required' => 'Vui lòng nhập email',
			'email.email' => 'Vui lòng nhập email',
			'phone.required' => 'Vui lòng nhập số điện thoại',
			'id_city.required' => 'Vui lòng chọn thành phố',
			'id_center.required' => 'Vui lòng chọn trung tâm',
			'study_ila.required' => 'Vui lòng chọn 1 mục trong phần Câu hỏi',
		]);
		if($valid->fails()){
			return redirect()->back()->withInput()->withErrors($valid);
		}else{
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
			try {
				\DB::connection('corporat_marketing')->table('customer')->insert($data2);	
			} catch (\Exception $e) {
				\Log::error($e);
			}
			
			Session::flash('register-status', 'success');
			return redirect()->route('f.getThanks');

		}

		
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
