<?php namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AlbumRepository;

class AlbumController extends Controller {

	protected $albumRepository;

	public function __construct(AlbumRepository $album){
		$this->albumRepository = $album;
	}

	public function getIndex($year)
	{
		$album = $this->albumRepository->getAlbumByYear($year);
		foreach ($album as $item)
		{
			dd($item);
		}
		return view('Frontend::pages.album',compact('album', 'year'));
	}

}
