<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	public $table = 'clients';

  protected $fillable= ['name', 'email', 'username', 'center_id', 'password'];

}
