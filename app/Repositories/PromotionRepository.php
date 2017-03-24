<?php
namespace App\Repositories;

use App\Models\Promotion;

class PromotionRepository{
    protected $promotion;

    public function __construct(Promotion $promotion){
      $this->promotion = $promotion;
    }

    public function getAll(){
      return $this->promotion->select('title','img_url','status','id')->orderBy('id','DESC')->get();
    }

    public function getFindID($id){
      return $this->promotion->find($id);
    }

    public function postUpdate($id,$data){
      return $this->promotion->where('id',$id)->update($data);
    }

    public function postCreate($data){
      return $this->promotion->create($data);
    }

    public function delete($id){
      $this->promotion->destroy($id);
    }

    public function deleteAll($data){
      $this->promotion->destroy($data);
    }

    public function getOrder(){
      $order = $this->promotion->orderBy('order','DESC')->first();
      count($order) == 0 ?  $current = 1 :  $current = $order->order +1 ;
      return $current;
    }
}
