<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

	protected $connection = 'mysql';

	public $table = 'testimonials';

	protected $fillable = ['title','slug','content','img_url','img_fb_thumb','order','status','author'];

}
