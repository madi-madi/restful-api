<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'description'=>$this->detail,
            'price'=>$this->price,
            'stock'=>$this->stock,
            'discount'=>$this->discount,
            'totalPrice'=>$this->discount != 0 ? round((1 -($this->discount/100)) * $this->price): $this->price,
            'rating'=>$this->reviews->count() > 0 ? round($this->reviews->sum('store')/$this->reviews->count(),2) : 'No rating yet',
            'href'=>[
                'reviews' => route('reviews.index',$this->id)
            ]

        ];
    }
}
