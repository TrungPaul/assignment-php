<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     protected $table = 'categories';
     protected $fillable = [
    	'name',
        'parent_id',
         	
    ];
    public function products() {
		return $this->hasMany('App\Models\product' , 'cate_id' ,'id');
	}
	public function childs(){
		  return $this->belongsTo('App\Models\category', 'parent_id' , 'id');
	}
}
