<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['group'];

    public function slider(){
            return $this->hasMany(Slider::class);
    } 
}
