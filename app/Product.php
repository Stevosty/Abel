<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['group_id', 'product', 'desc', 'image','status'];

    public function item(){
            return $this->hasMany(Item::class);
    } 

    public function size()
    {
    	return $this->hasMany(Size::class);

    }

    public function group()
    {
    	return $this->belongsTo(Group::class); 
    }
}
