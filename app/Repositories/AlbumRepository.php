<?php
namespace App\Repositories;

use App\Models\Album;

class AlbumRepository{
    protected $album;

    public function __construct(Album $album){
      $this->album = $album;
    }

    public function getAll(){
      return $this->album->select('title','status','id','img_url')->orderBy('id','DESC')->get();
    }

    public function getFindID($id){
      return $this->album->find($id);
    }

    public function postUpdate($id,$data){
      return $this->album->where('id',$id)->update($data);
    }

    public function postCreate($data){
      return $this->album->create($data);
    }

    public function delete($id){
      $this->album->destroy($id);
    }

    public function deleteAll($data){
      $this->album->destroy($data);
    }

    public function getOrder(){
      $order = $this->album->orderBy('order','DESC')->first();
      count($order) == 0 ?  $current = 1 :  $current = $order->order +1 ;
      return $current;
    }


    /*FRONTENT*/
    public function getAlbumByYear($year)
    {
      return $this->album->where('year',$year)->with('images')->orderBy('id','DESC')->take(4)->get();
    }

    public function get8Album(){
      return $this->album->select('title','status','id','slug')->orderBy('id','DESC')->with('images')->take(6)->get();
    }

    public function getAllAlbumWithImage(){
      return $this->album->select('title','status','id','slug')->orderBy('id','DESC')->with('images')->get();
    }


    public function getImgByAlbum($slug){
       $album = $this->album->select('id', 'slug', 'title')->where('slug', $slug)->first();
       $img = $album->images()->paginate(24);
       return $img;
    }
}
