<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Notification;
use App\Http\Requests\ImageRequest;
use App\Repositories\VideoRepository;
use App\Repositories\CommonRepository;


class VideoController extends Controller {

	protected $videoRepository;

	protected $_upload_folder = 'public/upload/video';
	protected $_default_img = "asset('public/assets/backend/img/image_thumbnail.gif')";

	public function __construct(VideoRepository $video){
		$this->videoRepository = $video;
	}

	public function index()
    {
        $video = $this->videoRepository->getAll();
        return view('Admin::pages.video.index')->with(compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ImageRequest $imgrequest)
    {
        $current = $this->videoRepository->getOrder();
				if($imgrequest->hasFile('img')){
						$common = new CommonRepository;
						$img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=true,400,400);
				}else{
					$img_url = $this->_default_img;
				}
        $data = [
            'title'=>$request->title,
            'slug' => \Unicode::make($request->title),
            'description' => $request->input('description'),
						'video_url' => $request->input('video_url'),
            'status'=> $request->status,
            'order'=>$current
        ];
        $this->videoRepository->postCreate($data);
        Notification::success('Created');
        return  redirect()->route('admin.video.index');
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
        $video = $this->videoRepository->getFindID($id);
        return view('Admin::pages.video.view')->with(compact('video'));
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
				'description' => $request->input('description'),
				'video_url' => $request->input('video_url'),
				'status'=> $request->status,
				'order'=>$request->order,
			];
			$this->videoRepository->postUpdate($id,$data);
      Notification::success('Updated');
      return  redirect()->route('admin.video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $this->videoRepository->delete($id);
        \Notification::success('Remove Successful');
        return redirect()->route('admin.video.index');
    }

    public function deleteAll(Request $request){
        if(!$request->ajax()){
            return view('404');
        }else{
            $data = $request->arr;
            if($data){
                $this->videoRepository->deleteAll($data);
                return response()->json(array('msg'=>'ok'));
            }else{
                return response()->json(array('msg'=>'error'));
            }
        }
    }

    public function checkRelate(Request $request){
        // $video = $this->videoRepository->find($request->dataid);
        // $count = $video->image()->get()->count();
        // if($count > 0){
        //     return response()->json(['msg'=>'yes']);
        // }else{
        //     $video->delete();
        //     return response()->json(['msg'=>'done']);
        // }
    }

}
