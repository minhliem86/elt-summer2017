<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model {

  protected $connection = 'mysql';

	public $table='schedules';

  protected $fillable = ['date','location','order','status'];

  public function activities(){
    return $this->belongsTo('App\Models\Activity','activity_id');
  }

}
