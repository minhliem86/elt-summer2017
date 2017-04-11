<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AlbumRepository;
use App\Repositories\UploadRepository;

class AlbumController extends Controller {

	protected $albumRepository;
	protected $imageRepository;

	public function __construct(AlbumRepository $album, UploadRepository $image){
		$this->albumRepository = $album;
		$this->imageRepository = $image;
	}

	public function getIndex($year)
	{
		$album = $this->albumRepository->getAlbumByYear($year);
		return view('Frontend::pages.album',compact('album', 'year'));
	}

	public function getImgByAlbum($id_album)
	{
		$albumWithImg = $this->albumRepository->getImgByAlbum($id_album);

		return view('Frontend::pages.photo', compact('albumWithImg'));
	}

	public function ajaxLoadPhoto(Request $request)
	{
		if(!$request->ajax()){

		}else{
			$id = $request->input('id');
			$img = $this->imageRepository->getFindID($id);
			$view = view('Frontend::ajax.photo_load', compact('img'))->render();
			return response()->json(['result' => $view]); 
		}
	}

}
