<?php
namespace App\Repositories;

use App\Models\Schedule;
use App\Models\Center;
use App\Models\Activity;

class ScheduleRepository{
    protected $schedule;

    public function __construct(Schedule $schedule){
      $this->schedule = $schedule;
    }

    public function getAll(){
      return $this->schedule->with('centers')->select('id','date','location','center_id','scheduleable_id','scheduleable_type')->orderBy('id','DESC')->get();
    }

    public function getFindID($id){
      return $this->schedule->find($id);
    }

    public function postUpdate($id,$data){
      return $this->schedule->where('id',$id)->update($data);
    }

    public function postCreate($data){
      return $this->schedule->create($data);
    }

    public function delete($id){
      $this->schedule->destroy($id);
    }

    public function deleteAll($data){
      $this->schedule->destroy($data);
    }

    public function getOrder(){
      $order = $this->schedule->orderBy('order','DESC')->first();
      count($order) == 0 ?  $current = 1 :  $current = $order->order +1 ;
      return $current;
    }

    public function listCenter(){
      return Center::where('status',1)->lists('name_vi','id');
    }
    public function listActivity(){
      return Activity::where('status',1)->lists('title','id');
    }

}
