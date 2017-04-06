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
		return view('Frontend::pages.testimonial',compact(('one_testi', 'three_testi')));
	}

	public function postAjax(){

	}



}
