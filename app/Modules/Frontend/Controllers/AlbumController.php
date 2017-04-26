<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AlbumRepository;
use App\Repositories\UploadRepository;
use App\Repositories\VideoRepository;
use App\Models\Image as Img;

class AlbumController extends Controller {

	protected $albumRepository;
	protected $imageRepository;
	protected $videoRepository;

	public function __construct(AlbumRepository $album, UploadRepository $image, VideoRepository $video){
		$this->albumRepository = $album;
		$this->imageRepository = $image;
		$this->videoRepository = $video;
	}

	public function getIndex()
	{
		$album = $this->albumRepository->get8Album();
		$video = $this->videoRepository->getAllVideo();
		return view('Frontend::pages.album',compact('album', 'year','video'));
	}

	public function getImgByAlbum(Request $request, $id_album)
	{
		$img = $this->imageRepository->getImgFromAlbum($id_album);
		$AlbumTitle = $img->first()->albums->title;
		if ($request->ajax()) {
    	// return view('Frontend::ajax.loadPhoto', ['img' => $img])->render();
    }
			return view('Frontend::pages.photo', compact('img','AlbumTitle'));
	}

	// LOAD PHOTO
	public function ajaxLoadPhoto(Request $request)
	{
		if(!$request->ajax()){
			abort(404, 'Page Not Found');
		}else{
			$id = $request->input('id');
			$img = $this->imageRepository->getFindID($id);
			$view = view('Frontend::ajax.photo_load', compact('img'))->render();
			return response()->json(['result' => $view]);
		}
	}
	// NEXT PREV PHOTO
	public function ajaxNextPhoto(Request $request){
		if(!$request->ajax())
		{
			abort(404, 'Page Not Found');
		}else{
			$next_id = $request->input('id') + 1;
			$id_album = $request->input('id_album');
			$img = $this->imageRepository->getImgAjaxFromAlbum($next_id, $id_album);

			if($img){
				$view = view('Frontend::ajax.photo_load', compact('img'))->render();
				return response()->json(['error'=> false,'result' => $view],200);
			}else{
				return response()->json(['error'=> true, 'msg'=> 'ses'],500);
			}
		}
	}

	public function ajaxPrevPhoto(Request $request){
		if(!$request->ajax())
		{
			abort(404, 'Page Not Found');
		}else{
			$next_id = $request->input('id') - 1;
			$id_album = $request->input('id_album');
			try{
				$img = $this->imageRepository->getImgAjaxFromAlbum($next_id, $id_album);
				$view = view('Frontend::ajax.photo_load', compact('img'))->render();
				return response()->json(['result' => $view]);
			}
			catch(\Exception $e){
				return response()->json(['result' =>'Something is wrong'],500);
			}
		}
	}

	// LOAD VIDEO
	public function ajaxLoadVideo(Request $request){
		if(!$request->ajax()){
			abort(404, 'Page Not Found');
		}else{
			$id = $request->input('id');
			$video = $this->videoRepository->getFindID($id);
			$view = view('Frontend::ajax.videoLoad',compact('video'))->render();
			return response()->json(['rs' =>$view]);
		}
	}

	// LOAD MORE PHOTO
	public function postAjaxGetAllImg(Request $request){
		if(!$request->ajax()){
			abort(404, 'Page Not Found');
		}else{
			$album = $this->albumRepository->getAllAlbumWithImage();
			if(count($album)){
				$view = view('Frontend::ajax.loadmorealbum', compact('album'))->render();
				return response()->json([
					'error' => false,
					'code' => 200,
					'rs' => $view,
				],200);
			}else{
				return response()->json([
					'error' => true,
					'code' => 500,
					'message' => 'Không có album',
				],500);
			}
		}
	}

	public function getPhotoDetail($id){
		$img = $this->imageRepository->getFindID($id);
		if($img) return view('Frontend::pages.photo_detail', compact('img'));
		abort(404, 'Do not have photo');

	}



}
