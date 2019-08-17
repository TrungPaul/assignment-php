<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Model
{
     protected $table = 'users';
     protected $fillable = [
    	'fistname',
        'lastname',
        'email', 
        'address',
        'birthday',
        'is_active'
         	
    ];
     protected $hidden = ['password'];
     public function comments() {
		return $this->hasMany('App\Models\comment' , 'user_id' ,'id');
	}
}
