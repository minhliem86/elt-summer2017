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
