<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function payers(){
        return $this->belongsTo(User::class);
    }

    public function receivers(){
        return $this->belongsTo(User::class);
    }

    public function drinks(){
        return $this->belongsTo(Drink::class);
    }
}
