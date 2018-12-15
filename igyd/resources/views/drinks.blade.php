@extends('layouts.app')

@section('content')
<div class="container home">

    <h5 class="text-center" style="padding-top:1rem">Hello {{ Auth::user()->name }},</h5>
    <div class="w-100"></div>
    <h5 class="text-center"> Here are the drinks from {{$data['shop']->name}}</h5>

    <div class="col-12 container" style="height: 350px;">
        <ul class="list-unstyled row">
            @foreach ($data['drinks'] as $drink)
            <li class="col-6 col-md-3 py-2">
                <img src="{{ $drink->img_src }}" alt="yourmom" class="img-fluid item">
                <p class="lead text-center"><b>{{$drink->name}}</b></p>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
