<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Repositories\CenterRepository;
use App\Repositories\KiddomRepository;
use Notification;

class KiddomController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $kiddom;
	protected $center;

	protected $arr_kiddom = [
		'1' => 'JumpStart (K)',
		'2' => 'SuperJuniors (J)',
		'3' => 'SmartTeens (S)',
		'4' => 'SuperJuniors + SmartTeens (JS)',
		'5' => 'All',
	];

	public function __construct(CenterRepository $center, KiddomRepository $kiddom)
	{
		$this->center = $center;
		$this->kiddom = $kiddom;
	}
	public function index()
	{
		$schedule = $this->kiddom->all([ 'id', 'title']);
		return view('Admin::pages.happykiddom.index', compact('schedule'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$center = $this->center->listCenter('name_vi','id');
		$capdo = $this->arr_kiddom;
		return view('Admin::pages.happykiddom.create', compact('center','capdo'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$checkExistCenter = $this->kiddom->checkExistCenterCreate('center_id',$request->center_id, 'class_code', $request->class_code);
		if($checkExistCenter){
			Notification::error('Center has Schedule already.');
			return redirect()->back();
		}
		$this->kiddom->create(['center_id'=>$request->center_id, 'class_code' => $request->class_code, 'schedule' => $request->schedule, 'title' => $request->title]);
		Notification::success('Schedule is Created.');
		return redirect()->route('admin.happykiddom.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$center = $this->center->listCenter('name_vi','id');
		$capdo = $this->arr_kiddom;
		$schedule = $this->kiddom->find($id);
		return view('Admin::pages.happykiddom.view', compact('schedule', 'center', 'capdo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$checkExistCenter = $this->kiddom->checkExistCenterUpdate('center_id', $request->center_id, 'class_code', $request->class_code, [$id] );
		if($checkExistCenter){
			Notification::error('Center has Schedule already.');
			return redirect()->back();
		}
		$data = [
			'center_id' => $request->center_id,
			'class_code' => $request->class_code,
			'schedule' => $request->schedule,
			'title' => $request->title
		];
		$schedule = $this->kiddom->update($id, $data);
		if(!$schedule){
			Notification::error('Update Fail.');
			return redirect()->back();
		}
		Notification::success('Update Successful.');
		return redirect()->route('admin.happykiddom.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
