<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller {

	protected $activityRepository;

	// public function __construct(ActivityRepository $activity){
	// 	$this->activityRepository = $activity;
	// }

	public function getIndex()
	{
		return view('Frontend::pages.contact');
	}

}
