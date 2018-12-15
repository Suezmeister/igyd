<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::all();
        return view('shops')->with('shops', $shops);
    }
    
    public function show($shop_id)
    {
        $drinks = Shop::find($shop_id)->drinks;
        $shop = Shop::find($shop_id);

        $data = array(
            'drinks' => $drinks,
            'shop' => $shop
        );
        
        return view('drinks')->with('data', $data);
    }
}
