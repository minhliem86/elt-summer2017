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

	public function __construct(CenterRepository $center, KiddomRepository $kiddom)
	{
		$this->center = $center;
		$this->kiddom = $kiddom;
	}
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$center = $this->center->listCenter('name_vi','id');
		return view('Admin::pages.happykiddom.create', compact('center'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$checkExistCenter = $this->kiddom->findByField('center_id', $request->center_id);
		if($checkExistCenter){
			Notification::error('Center has Schedule already.');
			return redirect()->back();
		}
		$this->kiddom->create(['center_id'=>$request->center_id,'schedule' => $request->schedule]);
		Notification::success('Schedule is Created.');
		return redirect()->route('admin.center.index');
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
		$schedule = $this->kiddom->find($id);
		return view('Admin::pages.happykiddom.view', compact('schedule', 'center'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$checkExistCenter = $this->kiddom->checkExistCenterUpdate('center_id', $request->center_id, [$id]);
		if($checkExistCenter){
			Notification::error('Center has Schedule already.');
			return redirect()->back();
		}
		$data = [
			'center_id' => $request->center_id,
			'schedule' => $request->schedule
		];
		$schedule = $this->kiddom->update($id, $data);
		if(!$schedule){
			Notification::error('Update Fail.');
			return redirect()->back();
		}
		Notification::success('Update Successful.');
		return redirect()->route('admin.center.index');

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