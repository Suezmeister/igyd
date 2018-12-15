@extends('layouts.app')

@section('content')
<div class="container home">

    <h5 class="text-center" style="padding-top:1rem">Hello {{ Auth::user()->name }},</h5>
    <div class="w-100"></div>
    <h5 class="text-center"> Please choose your cafe</h5>

    <div class="col-12 container" style="height: 350px;">
        <ul class="list-unstyled row">
            @foreach ($shops as $shop)
            <li class="col-md-6 py-2">
                <a href="/shop/{{$shop->id}}">
                    <img src="{{ $shop->img_src }}" alt="yourmom" class="img-fluid">
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
