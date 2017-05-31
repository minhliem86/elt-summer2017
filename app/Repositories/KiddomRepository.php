<?php
namespace App\Repositories;

use App\Repositories\Eloquent\BaseRepository;
use App\Models\KiddomSchedule;

class KiddomRepository extends BaseRepository{

  public function getModel()
  {
    return KiddomSchedule;
  }
}
