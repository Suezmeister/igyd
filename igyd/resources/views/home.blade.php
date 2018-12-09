@extends('layouts.app')

@section('navbar')
    @include('include.navbar')
@endsection
@section('content')
    <div class="container home">

        <div class="row">
            <div class="col-md-6">
                    <img src="/img/shops/cp/cp_bg.jpg" class="shop" />
            </div>
            <div class="col-md-6">
                    <img src="/img/shops/dd/dd_bg.jpg" class="shop" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                    <img src="/img/shops/jco/jco_bg.jpg" class="shop" />
            </div>
            <div class="col-md-6">
                    <img src="/img/shops/sb/sb_bg.jpg" class="shop" />
            </div>
        </div>
            
    </div>
@endsection
