<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\TestimonialRepository;

class TestimonialController extends Controller {

	protected $testimonialRepository;

	public function __construct(TestimonialRepository $testimonial){
		$this->testimonialRepository = $testimonial;
	}

	public function getIndex()
	{
		$last_testi = $this->testimonialRepository->getFinalTesti();
		$list_testi = $this->testimonialRepository->getAll();
		return view('Frontend::pages.testimonial', compact('list_testi','last_testi'));
	}

	public function postAjax(Request $request){
		if(!$request->ajax()){
			App::abort('Frontend::errors.404', 'message');
		}else{
			$id = $request->input('id');
			$last_testi = $this->testimonialRepository->getFindID($id);
			$view = view('Frontend::ajax.testimonial',compact('last_testi'))->render();
			return response()->json(['rs'=>$view]);
		}
	}



}
