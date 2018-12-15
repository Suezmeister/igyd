<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index($shop_id, $drink_id)
    {
        $shops = Shop::all();
        return view('shops')->with('shops', $shops);
    }
}
