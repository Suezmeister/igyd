<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use App\User;
use App\Order;
use Auth;

class OrderController extends Controller
{
    public function summary(Request $request)
    {
        $drink = Drink::find($request->drink_id);
        $shop = $drink->shop()->first();
        $receiver = User::find($request->receiver_id);
        $size = $request->size;
        $date = date('m/d/Y h:i:s');
        
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

        $order = new Order;
        $order->size = $request->size;
        $order->drink_id = $request->drink_id;
        $order->payer_id = Auth::user()->id;
        $order->receiver_id = $request->receiver;
        $order->save();

        
        return view('view_order')->with('order', $order);
    }
}
