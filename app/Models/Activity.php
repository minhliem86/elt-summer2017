<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	 protected $connection = 'mysql';

	public $table='activities';

  protected $fillable = ['title','slug','content','img_url','img_fb_thumb','order','status'];

  public function schedules(){
    return $this->morphMany('App\Models\Schedule','scheduleable');
  }

	public function centers(){
		return $this->belongsToMany('App\Models\Center','center_activity');
	}

	public function albums(){
		return $this->hasMany('App\Models\Album');
	}

}
