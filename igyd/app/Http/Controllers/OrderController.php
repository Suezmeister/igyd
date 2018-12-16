<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use App\User;
use App\Order;

class OrderController extends Controller
{
    public function summary(Request $request)
    {
        $drink = Drink::find($request->drink_id);
        $shop = $drink->shop()->first();
        $receiver = User::find($request->receiver_id);
        $size = $request->size;
        $date = date('m-d-Y');

        $data = array(
            'drink' => $drink,
            'shop' => $shop,
            'receiver' => $receiver,
            'size' => $size,
            'date' => $date
        );

        return view('summary')->with('data', $data);
    }

    public function store(Request $request){
        $drink = Drink::find($request->drink_id);
        $shop = $drink->shop()->first();
        $receiver = User::find($request->receiver);
        $size = $request->size;
        $date = date('m-d-Y');

        $data = array(
            'drink' => $drink,
            'shop' => $shop,
            'receiver' => $receiver,
            'size' => $size,
            'date' => $date
        );
        
        return view('view_order')->with('data', $data);
    }
}
