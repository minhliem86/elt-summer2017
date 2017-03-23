<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	 protected $connection = 'mysql';

	public $table='activities';

  protected $fillable = ['title','content','img_url','img_fb_thumb','order','status','center_id'];

  public function schedules(){
    return $this->hasMany('App\Models\Schedule','activity_id');
  }

}
