<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\TestimonialRepository;

class HomeController extends Controller {

	protected $testimonialRepository;

	public function __construct(TestimonialRepository $testimonial){
		$this->testimonialRepository = $testimonial;
	}

	public function getIndex()
	{
		$one_testi = $this->testimonialRepository->getOneRandom();
		$three_testi = $this->testimonialRepository->getThreeRandom([$one_testi->id]);
		return view('Frontend::pages.home',compact('one_testi', 'three_testi'));
	}

}
