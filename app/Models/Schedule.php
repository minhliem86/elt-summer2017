<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model {

  protected $connection = 'mysql';

	public $table='schedules';

  protected $fillable = ['date','location','order','status','scheduleable_id','scheduleable_type','center_id'];

  public function scheduleable()
  {
    return $this->morphTo();
  }

  // public function centers()
  // {
  //   return $this->morphedByMany('App\Models\Center','scheduleable');
  // }

  public function centers()
  {
    return $this->belongsTo('App\Models\Center','center_id');
  }

}
