<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $fillable = [
    		'name', 
    		'description',
    		'cate_id',
    		'price',
    		'sale_percent',
    		'stocks',
    		'is_active'
    ];
    public function comments() {
        return $this->hasMany('App\Models\comment', 'product_id' , 'id');
		
	}
	public function categories() {
		return $this->belongsTo('App\Models\category');
	}
}
