<?php
namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;
use App\Models\KiddomSchedule;

class KiddomRepository extends BaseRepository{

  public function getModel()
  {
    return KiddomSchedule::class;
  }

  public function checkExistCenterCreate($field, $value, $field2, $value2 ,$colum=['*'])
  {
      $rs = $this->model->where($field,'=',$value)->where($field2, '=', $value2)->get($column);
      if($rs->count()){
        return $rs;
      }
      return false;
  }

  public function checkExistCenterUpdate($field, $value, $field2, $value2 , $notID=[''])
  {
    $rs = $this->model->where($field,'=', $value)->where($field2, '=', $value2)->whereNotIn('id',$notID)->get();
    if($rs->count() >= 1 ){
      return $rs;
    }
    return false;
  }

}
