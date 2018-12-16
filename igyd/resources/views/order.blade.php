@extends('layouts.app')

@section('content')
<div class="container home">

    <h5 class="text-center" style="padding-top:1rem">Hello {{ Auth::user()->name }},</h5>
    <div class="w-100"></div>
    <h5 class="text-center">
        Whose drink is this?
    </h5>

    <div class="col-12 container" style="top:1rem">
        <div class="row">
            <div class="col-md-5" style="margin-bottom:1rem">
                <img src="{{ $data['drink']->img_src }}" alt="yourmom" class="img-fluid item">
                <p class="lead text-center"><b>{{$data['drink']->name}}</b></p>
                <div class="row justify-content-around" id="sizes">
                    <div class="col-3 align-self-center">
                        <img src="{{asset('img/small.png')}}" id="s" class="img-fluid size-s" style="width:75%;height:80%"/>
                    </div>
                    <div class="col-3 align-self-center">
                        <img src="{{asset('img/medium.png')}}" id="m" class="img-fluid size-m" style="width:85%;height:85%"/>
                    </div>
                    <div class="col-3 align-self-center">
                        <img src="{{asset('img/large.png')}}" id="l" class="img-fluid size-l" />
                    </div>
                </div>
            </div>
            <div class="col-md-7">

                {{ Form::open(array('url' => 'order')) }}
                <ul class="list-group" id="friends">
                    <li class="list-group-item" value="{{Auth::user()->id}}">Mine ({{Auth::user()->name}})</li>
                    @foreach ($data['users'] as $user)
                    <li class="list-group-item" value="{{$user->id}}">{{$user->name}}</li>
                    @endforeach
                </ul>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <input type="submit" class="my-submit" value="Order Now"/>
                    </div>
                </div>
            </div>
            <input type="hidden" name="drink_id" value="{{$data['drink']->id}}"/>
            <input type="hidden" name="receiver_id" />
            <input type="hidden" name="size" id="order_size"/>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
