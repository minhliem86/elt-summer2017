<?php
namespace App\Repositories;

use App\Models\Album;

class AlbumRepository{
    protected $album;

    public function __construct(Album $album){
      $this->album = $album;
    }

    public function getAll(){
      return $this->album->select('title','status','id')->orderBy('id','DESC')->get();
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
}
