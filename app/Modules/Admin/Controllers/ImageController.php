<?php namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Notification;
use App\Http\Requests\ImageRequest;
use App\Repositories\UploadRepository;
use App\Repositories\CommonRepository;

use App\Events\ImageWasDeleted;


class ImageController extends Controller {

		protected $image;

    protected $_upload_folder = 'public/upload/image';
    protected $_upload_folder_thumb = 'public/upload/image/thumbs';

    public function __construct(UploadRepository $image){
        $this->image = $image;
    }

    public function index()
    {
        $image = $this->image->getAll();
				// dd($image);
        return view('Admin::pages.image.index')->with(compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$list_album = $this->image->getListAlbum();
        return view('Admin::pages.image.create',compact('list_album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $image = $this->image->getFindID($id);
				$list_album = $this->image->getListAlbum();
        return view('Admin::pages.image.view')->with(compact('image','list_album'));
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
				$img_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder,$resize=true,1200,630);
				$thumbnail_url = $common->uploadImage($request,$imgrequest->file('img'),$this->_upload_folder_thumb,$resize=true,300,158);

			}else{
				$img_url = $request->input('img-bk');
				$thumbnail_url = $request->input('img-thumb-bk');
			}
			$arr_filename = explode('/',$img_url);
			$filename = end($arr_filename);

			$data = [
				'title'=>$request->title,
				'slug' => \Unicode::make($request->title),
				'description' => $request->input('description'),
				'img_url' => $img_url,
				'thumbnail_url' => $thumbnail_url,
				'status'=> $request->status,
				'order'=>$request->order,
				'album_id' => $request->album_id,
				'filename' => $filename,
			];
			$this->image->postUpdate($id,$data);
			Notification::success('Updated');
			return  redirect()->route('admin.image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
		 public function postDelete(Request $request)
		 {
				 $response = $this->image->delete($request->input('id'));
				 return $response;
		 }
    public function destroy($id){
				$upload_path = config('dropzoner.upload-path');

				$filename = $this->image->getNameImg($id);
				$full_path = $upload_path . $filename;
				if (\File::exists($full_path)) {
						\File::delete($full_path);
				}
        event(new ImageWasDeleted($id));
        \Notification::success('Remove Successful');
        return redirect()->route('admin.image.index');
    }

    public function deleteAll(Request $request){
        if(!$request->ajax()){
            return view('404');
        }else{
						$upload_path = config('dropzoner.upload-path');
            $data = $request->arr;
						if($data){
							foreach($data as $item){
								$filename = $this->image->getNameImg($item);

								$full_path = $upload_path . $filename;

								if (\File::exists($full_path)) {
										\File::delete($full_path);
								}

								event(new ImageWasDeleted($data));

								return response()->json([
										'error' => false,
										'code'  => 200
								], 200);
							}
						}else{
								return response()->json(array('msg'=>'error'));
						}
				}
    }

    public function checkRelate(Request $request){
        $image = $this->image->find($request->dataid);
        $count = $image->image()->get()->count();
        if($count > 0){
            return response()->json(['msg'=>'yes']);
        }else{
            $image->delete();
            return response()->json(['msg'=>'done']);
        }
    }

		public function postUpload(Request $request){
			$input = $request->all();
			$response = $this->image->upload($input);
			return $response;
		}

}
