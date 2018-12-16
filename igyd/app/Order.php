<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function payer($payer_id){
        return $this->belongsTo(User::class)->where('id',$payer_id)->first();
    }

    public function receiver($receiver_id){
        return $this->belongsTo(User::class)->where('id',$receiver_id)->first();
    }

    public function drink(){
        return $this->belongsTo(Drink::class);
    }
}
