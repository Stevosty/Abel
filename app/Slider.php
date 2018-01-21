<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['group_id', 'bg_image', 'image', 'title', 'fact_1', 'fact_2', 'status'];

    public function group()
    {
    	return $this->belongsTo(Group::class); 
    }


}
