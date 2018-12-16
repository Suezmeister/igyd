@extends('layouts.app')

@section('content')
<div class="container home">

    <h5 class="text-center" style="padding-top:1rem">Hello {{ Auth::user()->name }},</h5>
    <div class="w-100"></div>
    <h5 class="text-center">You current credit is ₱{{Auth::user()->credit}}</h5>

    <div class="col-12 container" style="height: 370px">
        <ul class="list-unstyled row">
            <li class="col-md-5 offset-md-1 py-2 home-item">
                <a href="/shops">
                    <img src="{{ asset('img/order.jpg') }}" alt="yourmom" class="img-fluid home-img">
                </a>
                <p class="text-center" style="font-size:1.5rem"><b>Order Drink</b></p>
            </li>
            <li class="col-md-5 offset-md-1 py-2 home-item">
                <a href="#">
                    <img src="{{ asset('img/receive.jpg') }}" alt="yourmom" class="img-fluid home-img">
                </a>
                <p class="text-center" style="font-size:1.5rem"><b>Receive Drink</b></p>
            </li>
        </ul>
    </div>
</div>
@endsection
