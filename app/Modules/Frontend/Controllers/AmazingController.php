<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmazingController extends Controller {

	protected $activityRepository;

	// public function __construct(ActivityRepository $activity){
	// 	$this->activityRepository = $activity;
	// }

	public function getAmazingRace()
	{
		return view('Frontend::pages.amazing-race');
	}

	public function getAmazingSummer()
	{
		return view('Frontend::pages.amazing-summer');
	}

}
