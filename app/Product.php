<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'productos';
	protected $fillable = [
		'name',
		'price',
		'stock'
	]
	// public function detail()
 //    {
 //        return $this->morphOne('App\Detail', 'details',null, 'id_product');
 //    }
    public function detail()
    {
     return $this->morphOne('App\Detail', 'detail');
    }
}