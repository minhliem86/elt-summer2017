<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole {

	public $table = 'roles';

  public function users(){
    return $this->belongsToMany('App\Models\User');
  }
}
