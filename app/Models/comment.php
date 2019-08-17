<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
     protected $table = 'comments';
      protected $fillable = [
    	'user_id',
        'product_id',
        'content'
         	
    ];
     public function users(){
        return $this->hasMany('App\Models\user', 'user_id' , 'id');
    }
     public function products(){
       return $this->belongsTo('App\Models\product', 'product_id' , 'id');
    }
}
