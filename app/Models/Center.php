<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model {

	public $connection = 'corporat_ref';

  public $table = 'center';

	protected $fillable = ['id', 'name_vi'];

  public function activities(){
    return $this->belongsToMany('App\Models\Activity','center_activity');
  }

	// public function schedules(){
  //   return $this->morphToMany('App\Models\Schedule','scheduleable');
  // }

	public function schedules(){
		return $this->hasMany('App\Models\Schedule');
	}
}
