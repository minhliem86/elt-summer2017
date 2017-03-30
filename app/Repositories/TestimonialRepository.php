<?php
namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialRepository{
    protected $testimonial;

    public function __construct(Testimonial $testimonial){
      $this->testimonial = $testimonial;
    }

    public function getAll(){
      return $this->testimonial->select('title','content','img_url','status','id','author')->orderBy('id','DESC')->get();
    }

    public function getFindID($id){
      return $this->testimonial->find($id);
    }

    public function postUpdate($id,$data){
      return $this->testimonial->where('id',$id)->update($data);
    }

    public function postCreate($data){
      return $this->testimonial->create($data);
    }

    public function delete($id){
      $this->testimonial->destroy($id);
    }

    public function deleteAll($data){
      $this->testimonial->destroy($data);
    }

    public function getOrder(){
      $order = $this->testimonial->orderBy('order','DESC')->first();
      count($order) == 0 ?  $current = 1 :  $current = $order->order +1 ;
      return $current;
    }

    // FRONTEND

    public function getOneRandom(){
      return $this->testimonial->where('status',1)->orderByRaw("RAND()")->take(1)->first();
    }

    public function getThreeRandom($arrDataNotIn)
    {
        return $this->testimonial->where('status',1)->whereNotIn('id',$arrDataNotIn)->take(3)->get();
    }

    public function getFinalTesti()
    {
        return $this->testimonial->where('status',1)->orderBy('id','DESC')->first();
    }

}
