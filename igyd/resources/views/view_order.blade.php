@extends('layouts.app')

@section('content')
<div class="container home">

    <h5 class="text-center" style="padding-top:1rem">Hello {{ Auth::user()->name }},</h5>
    <div class="w-100"></div>
    <h5 class="text-center">
        You ordered {{$order->drink->name}} for {{$order->receiver($order->receiver_id)->name}}
    </h5>
    <div class="w-100"></div>
    <h5 class="text-center">
        On {{date('F j, Y \a\t h:i:s A', strtotime($order->created_at))}}
    </h5>

    <div class="col-12 container" style="top:1rem">
        <div class="row">
            <div class="col-md-5" style="margin-bottom:1rem">
                <img src="{{ $order->drink->img_src }}" alt="yourmom" class="img-fluid item">
                <p class="lead text-center"><b>{{$order->drink->name}}</b></p>
                <div class="row justify-content-around">
                    <div class="col-3 align-self-center">
                        <img src="{{asset('img/small.png')}}" id="ss" class="img-fluid size-s" style="width:75%;height:75%" />
                    </div>
                    <div class="col-3 align-self-center">
                        <img src="{{asset('img/medium.png')}}" id="sm" class="img-fluid size-m" style="width:85%;height:85%" />
                    </div>
                    <div class="col-3 align-self-center">
                        <img src="{{asset('img/large.png')}}" id="sl" class="img-fluid size-l" />
                    </div>
                    <input type="hidden" name="size" value="{{$order->size}}" id="summary_size" />
                </div>
            </div>
            <div class="col-md"></div>
            <div class="col-md-4 receipt">
                <hr />
                <h6 class="text-center" style="margin:.25rem">RECEIPT</h6>
                <hr style="margin-top:0" />
                <h3 class="text-center" style="margin-top:1rem">{{$order->drink->shop->name}}</h3>

                <div class="row" style="margin-top:2rem">
                    <div class="col-6">Paid By:</div>
                    <div class="col">{{$order->payer($order->payer_id)->name}}</div>
                </div>
                <div class="row">
                    <div class="col-6">Received By:</div>
                    <div class="col">{{$order->receiver($order->receiver_id)->name}}</div>
                </div>

                <div class="row content-justify-center" style="margin-top:4rem">
                    @if($order->size=='M')
                    <div class="col-9">{{$order->drink->name}} (M)</div>
                    <div class="col-1">₱{{$order->drink->price + 15}}</div>
                    @elseif($order->size=='L')
                    <div class="col-9">{{$order->drink->name}} (L)</div>
                    <div class="col-1">₱{{$order->drink->price + 25}}</div>
                    @else
                    <div class="col-9">{{$order->drink->name}} (S)</div>
                    <div class="col-1">₱{{$order->drink->price}}</div>
                    @endif
                </div>
                <hr>

                <hr style="margin-top:4rem; margin-bottom:.1rem" />
                <p class="lead text-center"><b>{{$order->created_at}}</b></p>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
    @endsection
