<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model {

	public $connection = 'corporat_ref';

  public $table = 'center';

  public function activities(){
    return $this->hasMany('App\Models\Activity');
  }

  public function schedules(){
    return $this->hasManyThrough('App\Models\Schedule','App\Models\Activity');
  }

}
