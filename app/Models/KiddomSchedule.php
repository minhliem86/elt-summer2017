<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KiddomSchedule extends Model {

	public $table ="kiddom_schedules";

  protected $fillable = ['schedule', 'center_id'];

  public function centers()
  {
    return $this->belongsTo('App\Models\Center','center_id');
  }

}
