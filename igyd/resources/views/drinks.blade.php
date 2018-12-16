@extends('layouts.app')

@section('content')
<div class="container home">

    <h5 class="text-center" style="padding-top:1rem">Hello {{ Auth::user()->name }},</h5>
    <div class="w-100"></div>
    <h5 class="text-center">
        Here are the drinks from
        <div class="w-100 d-xs"></div>
        {{$data['shop']->name}}
    </h5>

    <div class="col-12 container" style="height: 350px;">
        <ul class="list-unstyled row">
            @foreach ($data['drinks'] as $drink)
            <li class="col-6 col-md-3 py-2">
                <a href="/shop/{{$data['shop']->id}}/drink/{{$drink->id}}">
                    <img src="{{ $drink->img_src }}" alt="yourmom" class="img-fluid item">
                </a>
                <p class="lead text-center"><b>{{$drink->name}}</b></p>
            </li>
            @endforeach
        </ul>
        
        <div class="row justify-content-center" style="margin-top:2rem">
                <div class="col-5 col-md-2">
                    <a href="/shops">
                        <div class="btn btn-warning"><b>Previous</b></div>
                    </a>
                </div>
            </div>
    </div>
</div>
@endsection
