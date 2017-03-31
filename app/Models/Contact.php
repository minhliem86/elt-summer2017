<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	public $table = 'contacts';

  protected $fillable = ['fullname', 'email', 'phone', 'id_city', 'id_center', 'study_ila', 'message'];


}
