<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

	protected $connection = 'mysql';

  public $table = 'videos';

  protected $fillable = ['title','slug','description','video_url','order','status'];

}
