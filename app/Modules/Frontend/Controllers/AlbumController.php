<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AlbumRepository;
use App\Repositories\UploadRepository;
use App\Repositories\VideoRepository;

class AlbumController extends Controller {

	protected $albumRepository;
	protected $imageRepository;
	protected $videoRepository;

	public function __construct(AlbumRepository $album, UploadRepository $image, VideoRepository $video){
		$this->albumRepository = $album;
		$this->imageRepository = $image;
		$this->videoRepository = $video;
	}

	public function getIndex($year)
	{
		$album = $this->albumRepository->getAlbumByYear($year);
		$video = $this->videoRepository->getAll();
		return view('Frontend::pages.album',compact('album', 'year','video'));
	}

	public function getImgByAlbum($id_album)
	{
		$albumWithImg = $this->albumRepository->getImgByAlbum($id_album);
		return view('Frontend::pages.photo', compact('albumWithImg'));
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
			abort(404);
		}else{
			$id = $request->input('id');
			$video = $this->videoRepository->getFindID($id);
			$view = view('Frontend::ajax.videoLoad',compact('video'))->render();
			return response()->json(['rs' =>$view]);
		}

	}



}