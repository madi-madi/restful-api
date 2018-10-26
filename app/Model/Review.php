<?php

namespace App\Model;
use App\Model\Product;

use Illuminate\Database\Eloquent\Model;
class Review extends Model
{
    //
        protected $table = 'reviews';
    protected $fillable=[
    	   
        'customer',
        'review',
        'store',
    ];

        public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
