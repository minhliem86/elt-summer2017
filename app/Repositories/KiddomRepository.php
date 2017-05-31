<?php
namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;
use App\Models\KiddomSchedule;

class KiddomRepository extends BaseRepository{

  public function getModel()
  {
    return KiddomSchedule::class;
  }

  public function checkExistCenterUpdate($field, $value, $notID=[''])
  {
    $rs = $this->model->where($field,'=', $value)->whereNotIn('id',$notID)->get();
    if($rs->count() >= 1 ){
      return $rs;
    }
    return false;
  }

}
