<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {

	protected $connection = 'mysql';
	
	public $table = 'promotions';

  protected $fillable = ['title','content','img_url','order','status'];

}
