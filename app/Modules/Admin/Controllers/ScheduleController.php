<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Notification;
use App\Http\Requests\ImageRequest;
use App\Repositories\ScheduleRepository;
use App\Repositories\CommonRepository;
use App\Models\Center;
use App\Models\Activity;
use Carbon\Carbon as Carbon;

use App\Models\Schedule;


class ScheduleController extends Controller {

	protected $scheduleRepository;

	public function __construct(ScheduleRepository $schedule){
		$this->scheduleRepository = $schedule;
	}

	public function index()
    {
        $schedule = $this->scheduleRepository->getAll();
        return view('Admin::pages.schedule.index')->with(compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			$list_center = $this->scheduleRepository->listCenter();
			$list_activity = $this->scheduleRepository->listActivity();
      return view('Admin::pages.schedule.create',compact('list_center','list_activity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current = $this->scheduleRepository->getOrder();
				$activity = Activity::find($request->input('activity_id'));
				$date = $request->date;
				$date = date('Y-m-d',strtotime($date));

        $data = [
            'date'=>$date,
            'location' => $request->input('location'),
            'status'=> $request->status,
						'center_id'=>$request->input('center_id'),
            'order'=>$current,
        ];
				$schedule = $this->scheduleRepository->postCreate($data);
				$activity->schedules()->save($schedule);
        Notification::success('Created');
        return  redirect()->route('admin.schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
				$schedule = $this->scheduleRepository->getFindID($id);
				$list_center = $this->scheduleRepository->listCenter();
				$list_activity = $this->scheduleRepository->listActivity();
        return view('Admin::pages.schedule.view',compact('schedule','list_center','list_activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$activity = Activity::find($request->input('activity_id'));
			$date = $request->date;
			$date = date('Y-m-d',strtotime($date));

			$data = [
				'date'=>$date,
				'location' => $request->input('location'),
				'status'=> $request->status,
				'center_id'=>$request->input('center_id'),
				'order'=>$request->order,
			];

			$this->scheduleRepository->postUpdate($id,$data);
			$schedule = $this->scheduleRepository->getFindID($id);
			$activity->schedules()->save($schedule);
      Notification::success('Updated');
      return  redirect()->route('admin.schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $this->scheduleRepository->delete($id);
        \Notification::success('Remove Successful');
        return redirect()->route('admin.schedule.index');
    }

    public function deleteAll(Request $request){
        if(!$request->ajax()){
            return view('404');
        }else{
            $data = $request->arr;
            if($data){
                $this->scheduleRepository->deleteAll($data);
                return response()->json(array('msg'=>'ok'));
            }else{
                return response()->json(array('msg'=>'error'));
            }
        }
    }

    public function checkRelate(Request $request){
        // $schedule = $this->scheduleRepository->find($request->dataid);
        // $count = $schedule->image()->get()->count();
        // if($count > 0){
        //     return response()->json(['msg'=>'yes']);
        // }else{
        //     $schedule->delete();
        //     return response()->json(['msg'=>'done']);
        // }
    }

}
