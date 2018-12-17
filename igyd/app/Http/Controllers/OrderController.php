<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use App\User;
use App\Order;
use Auth;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $order->credits_before_transaction = Auth::user()->credit;
        if($order->size == 'L'){
            $order->credits_after_transaction = Auth::user()->credit - $drink->price - 25;
        }else if($order->size == 'M'){
            $order->credits_after_transaction = Auth::user()->credit - $drink->price - 15;
        }else{
            $order->credits_after_transaction = Auth::user()->credit - $drink->price;
        }
        $order->receiver_id = $request->receiver;
        $order->save();

        $payer = User::find(Auth::user()->id);
        $payer->credit = $order->credits_after_transaction;
        $payer->save();

        
        return view('view_order')->with('order', $order);
    }

    public function receipts(){

        $standing_orders = Order::where('payer_id',Auth::user()->id)->orderBy('created_at')->get();

        $data = [
            'standing_orders' => $standing_orders,
        ];

        return view('receipts')->with('data', $data);
    }

    public function view_receipt($receipt_id){

        $order = Order::find($receipt_id);

        return view('view_order')->with('order', $order);
    }
}
