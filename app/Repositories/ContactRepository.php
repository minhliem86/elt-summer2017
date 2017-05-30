<?php
namespace App\Repositories;

use App\Models\Contact;
use App\Models\Center;
use DB;

class ContactRepository{
    protected $contact;

    public function __construct(Contact $contact){
      $this->contact = $contact;
    }

    public function getAll(){
      return $this->contact->select('fullname','email','phone','id')->orderBy('id','DESC')->get();
    }

    public function getFindID($id){
      return $this->contact->find($id);
    }

    public function postUpdate($id,$data){
      return $this->contact->where('id',$id)->update($data);
    }

    public function postCreate($data){
      return $this->contact->create($data);
    }

    public function delete($id){
      $this->contact->destroy($id);
    }

    public function deleteAll($data){
      $this->contact->destroy($data);
    }

    public function getOrder(){
      $order = $this->contact->orderBy('order','DESC')->first();
      count($order) == 0 ?  $current = 1 :  $current = $order->order +1 ;
      return $current;
    }

    public function getListCity()
    {
      return DB::connection('corporat_ref')->table('city')->select('id','name')->whereIn('id',['48','20','1','70','50','49','39'])->lists('name','id');
    }

    public function getListCenter($id_city)
    {
      return Center::where('id_city',$id_city)->select('id','name_vi')->where('status',1)->lists('name_vi','id');
    }


}
