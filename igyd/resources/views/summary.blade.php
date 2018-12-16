@extends('layouts.app')

@section('content')
<div class="container home">

    <h5 class="text-center" style="padding-top:1rem">Hello {{ Auth::user()->name }},</h5>
    <div class="w-100"></div>
    <h5 class="text-center"> Please confirm your order</h5>

    <div class="col-12 container" style="top:1rem">
        <div class="row">
            <div class="col-md-5" style="margin-bottom:1rem">
                <img src="{{ $data['drink']->img_src }}" alt="yourmom" class="img-fluid item">
                <p class="lead text-center"><b>{{$data['drink']->name}}</b></p>
                <div class="row justify-content-around">
                    <div class="col-3">
                        <img src="{{asset('img/small.png')}}" class="img-fluid  @if ($data['size']=='S') size-active @endif" />
                    </div>
                    <div class="col-3">
                        <img src="{{asset('img/medium.png')}}" class="img-fluid @if ($data['size']=='M') size-active @endif" />
                    </div>
                    <div class="col-3">
                        <img src="{{asset('img/large.png')}}" class="img-fluid @if ($data['size']=='L') size-active @endif" />
                    </div>
                </div>
            </div>
            <div class="col-md"></div>
            <div class="col-md-4 receipt">
                <hr />
                <h6 class="text-center" style="margin:.25rem">RECEIPT</h6>
                <hr style="margin-top:0" />
                <h3 class="text-center" style="margin-top:1rem">{{$data['shop']->name}}</h3>

                <div class="row" style="margin-top:2rem">
                    <div class="col-6">Paid By:</div>
                    <div class="col">{{Auth::user()->name}}</div>
                </div>
                <div class="row">
                    <div class="col-6">Received By:</div>
                    <div class="col">{{$data['receiver']->name}}</div>
                </div>

                <div class="row content-justify-center" style="margin-top:4rem">
                    @if($data['size']=='M')
                    <div class="col-9">{{$data['drink']->name}} (M)</div>
                    <div class="col-1">₱{{$data['drink']->price + 15}}</div>
                    @elseif($data['size']=='L')
                    <div class="col-9">{{$data['drink']->name}} (L)</div>
                    <div class="col-1">₱{{$data['drink']->price + 25}}</div>
                    @else
                    <div class="col-9">{{$data['drink']->name}} (S)</div>
                    <div class="col-1">₱{{$data['drink']->price}}</div>
                    @endif
                </div>
                <hr>

                <hr style="margin-top:4rem; margin-bottom:.1rem" />
                <p class="lead text-center"><b>{{$data['date']}}</b></p>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
</div>
@endsection
