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
                <div class="row justify-content-around">
                    <div class="col-3">
                        <img src="{{asset('img/small.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-3">
                        <img src="{{asset('img/medium.png')}}" class="img-fluid" />
                    </div>
                    <div class="col-3">
                        <img src="{{asset('img/large.png')}}" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <ul class="list-group">
                    <li class="list-group-item">Mine</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
