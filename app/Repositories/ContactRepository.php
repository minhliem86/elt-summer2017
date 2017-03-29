<?php
namespace App\Repositories;

use App\Models\Contact;

class ContactRepository{
    protected $contact;

    public function __construct(Contact $contact){
      $this->contact = $contact;
    }

    public function getAll(){
      return $this->contact->select('title','content','img_url','status','id')->orderBy('id','DESC')->get();
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

    public function listCenter(){
      return Center::where('status',1)->lists('name_vi','id');
    }
}
