<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $connection = 'mysql';

	public $table = 'images';

  protected $fillable = ['title','slug','description','img_url','order','status','album_id','filename','thumbnail_url'];

  public function albums(){
    return $this->belongsTo('App\Models\Album','album_id');
  }

}
