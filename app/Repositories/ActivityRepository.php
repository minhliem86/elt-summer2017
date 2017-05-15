<?php
namespace App\Repositories;

use App\Models\Activity;
use App\Models\Center;

class ActivityRepository{
    protected $activity;

    public function __construct(Activity $activity){
      $this->activity = $activity;
    }

    public function getAll(){
      return $this->activity->select('title','content','img_url','status','id')->orderBy('id','DESC')->get();
    }

    public function getFindID($id){
      return $this->activity->find($id);
    }

    public function postUpdate($id,$data){
      return $this->activity->where('id',$id)->update($data);
    }

    public function postCreate($data){
      return $this->activity->create($data);
    }

    public function delete($id){
      $this->activity->destroy($id);
    }

    public function deleteAll($data){
      $this->activity->destroy($data);
    }

    public function getOrder(){
      $order = $this->activity->orderBy('order','DESC')->first();
      count($order) == 0 ?  $current = 1 :  $current = $order->order +1 ;
      return $current;
    }

    public function listCenter(){
      return Center::where('status',1)->lists('name_vi','id');
    }

    public function getListActivity(){
      return $this->activity->lists('title','id');
    }

    public function get8Activity(){
      return $this->activity->select('title','status','id','slug','img_url')->orderBy('id','DESC')->take(6)->get();
    }

    public function getIdByActiSlug($slug){
      try {
        return $act = $this->activity->where('slug', $slug)->with('albums')->first();
      } catch (Exception $e) {
        return redirect()->back();
      }

    }
}
