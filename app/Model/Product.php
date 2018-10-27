<?php

namespace App\Model;
use App\Model\Review;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable=[
    	'name','detail','price','stock','discount',
    ];

    public function reviews()
    {
    	return $this->hasMany('App\Model\Review','product_id');
    }
}
