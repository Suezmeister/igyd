<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function drinks(){
        return $this->hasMany(Drink::class);
    }
}
