<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['order_id', 'product_id', 'size_id', 'quantity', 'total'];

    public function product()
    {
    	return $this->belongsTo(Product::class); 
    }

    public function order()
    {
    	return $this->belongsTo(Order::class); 
    }

    public function size()
    {
    	return $this->belongsTo(Size::class); 
    }
}
