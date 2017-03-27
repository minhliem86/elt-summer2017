<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Notification;
use App\Http\Requests\ImageRequest;
use App\Repositories\ActivityRepository;
use App\Repositories\CommonRepository;


class ActivityController extends Controller {

	protected $activityRepository;

	protected $_upload_folder = 'public/upload/activity';
	protected $_default_img = "asset('public/assets/backend/img/image_thumbnail.gif')";

	public function __construct(ActivityRepository $activity){
		$this->activityRepository = $activity;
	}

	public function index()
    {
        $activity = $this->activityRepository->getAll();
        return view('Admin::pages.activity.index')->with(compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Admin::pages.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ImageRequest $imgrequest)
    {
        $current = $this->activityRepository->getOrder();

				if($imgrequest->hasFile('img')){
						$common = new CommonRepository;
						$img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=true,400,400);
				}else{
					$img_url = $this->_default_img;
				}


        $data = [
            'title'=>$request->title,
            'slug' => \Unicode::make($request->title),
            'img_url' => $img_url,
            'content' => $request->input('content'),
            'status'=> $request->status,
            'order'=>$current,
        ];
        $this->activityRepository->postCreate($data);
        Notification::success('Created');
        return  redirect()->route('admin.activity.index');
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
				$activity = $this->activityRepository->getFindID($id);
        return view('Admin::pages.activity.view',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ImageRequest $imgrequest, $id)
    {
			if($imgrequest->hasFile('img')){
				$common = new CommonRepository;
				$img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=true,400,400);
			}else{
				$img_url = $request->input('img-bk');
			}
			$data = [
				'title'=>$request->title,
				'slug' => \Unicode::make($request->title),
				'img_url' => $img_url,
				'content' => $request->input('content'),
				'status'=> $request->status,
				'order'=>$request->order,
			];
			$this->activityRepository->postUpdate($id,$data);
      Notification::success('Updated');
      return  redirect()->route('admin.activity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $this->activityRepository->delete($id);
        \Notification::success('Remove Successful');
        return redirect()->route('admin.activity.index');
    }

    public function deleteAll(Request $request){
        if(!$request->ajax()){
            return view('404');
        }else{
            $data = $request->arr;
            if($data){
                $this->activityRepository->deleteAll($data);
                return response()->json(array('msg'=>'ok'));
            }else{
                return response()->json(array('msg'=>'error'));
            }
        }
    }

    public function checkRelate(Request $request){
        // $activity = $this->activityRepository->find($request->dataid);
        // $count = $activity->image()->get()->count();
        // if($count > 0){
        //     return response()->json(['msg'=>'yes']);
        // }else{
        //     $activity->delete();
        //     return response()->json(['msg'=>'done']);
        // }
    }

}
