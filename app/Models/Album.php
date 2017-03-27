<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

	protected $connection = 'mysql';

	public $table = 'albums';

  protected $fillable = ['title','slug','description','order','status'];

  public function images(){
    return $this->hasMany('App\Models\Image','album_id');
  }

}
