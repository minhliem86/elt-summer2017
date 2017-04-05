<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Notification;
use App\Http\Requests\ImageRequest;
use App\Repositories\AlbumRepository;


class AlbumController extends Controller {

	protected $albumRepository;

	protected $_upload_folder = 'public/upload/album';
	protected $_default_img = "asset('public/assets/backend/img/image_thumbnail.gif')";

	public function __construct(AlbumRepository $album){
		$this->albumRepository = $album;
	}

	public function index()
    {
        $album = $this->albumRepository->getAll();
        return view('Admin::pages.album.index')->with(compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ImageRequest $imgrequest)
    {
        $current = $this->albumRepository->getOrder();



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
            'year' => $request->input('year'),
            'status'=> $request->status,
            'order'=>$current
        ];
        $this->albumRepository->postCreate($data);
        Notification::success('Created');
        return  redirect()->route('admin.album.index');
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
        $album = $this->albumRepository->getFindID($id);
        return view('Admin::pages.album.view')->with(compact('album'));
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
				'year'=> $request->year,
				'status'=> $request->status,
				'order'=>$request->order,
			];
			$this->albumRepository->postUpdate($id,$data);
      Notification::success('Updated');
      return  redirect()->route('admin.album.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $this->albumRepository->delete($id);
        \Notification::success('Remove Successful');
        return redirect()->route('admin.album.index');
    }

    public function deleteAll(Request $request){
        if(!$request->ajax()){
            return view('404');
        }else{
            $data = $request->arr;
            if($data){
                $this->albumRepository->deleteAll($data);
                return response()->json(array('msg'=>'ok'));
            }else{
                return response()->json(array('msg'=>'error'));
            }
        }
    }

    public function checkRelate(Request $request){
        // $album = $this->albumRepository->find($request->dataid);
        // $count = $album->image()->get()->count();
        // if($count > 0){
        //     return response()->json(['msg'=>'yes']);
        // }else{
        //     $album->delete();
        //     return response()->json(['msg'=>'done']);
        // }
    }

}
