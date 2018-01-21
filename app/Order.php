<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['buyer_id', 'total', 'status'];
    public function buyer()
    {
    	return $this->belongsTo(Buyer::class); 
    }

    public function item(){
            return $this->hasMany(Item::class);
    }    
}
