<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['product_id', 'size', 'price', 'sale_price'];

    public function product()
    {
    	return $this->belongsTo(Product::class); 
    }
}
