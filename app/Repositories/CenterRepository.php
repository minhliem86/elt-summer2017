<?php
namespace App\Repositories;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Center;
class CenterRepository extends BaseRepository
{
  // protected $center;
  //
  // public function __construct(Center $center){
  //   $this->center = $center;
  // }
  public function getModel()
  {
    return Center::class;
  }
  public function listCenter($key, $value)
  {
    return $this->findByField('status',1)->lists($key, $value);
  }
}
