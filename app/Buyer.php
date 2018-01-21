<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function order(){
        return $this->hasMany(Orders::class);
    } 
}
