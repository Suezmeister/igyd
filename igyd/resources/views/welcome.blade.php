@extends('layouts.app')

@section('content')

<div class="container d-flex">
    <div class="row justify-content-center" style="flex:1 100%;">
        <div class="col-9 align-self-center centerpiece">
            <div class="row justify-content-center">
                <h1 class="text-center title">I Got Your Drink</h1>
            </div>
            <div class="row justify-content-center" style="margin-bottom:2rem">
                <h6 class="text-center subtitle">Already have an account?</h6>
            </div>
            <div class="row justify-content-around">
                <div class="col-4">
                    <a href="/register">
                        <img src="{{asset('img/register.png')}}" class="img-fluid welcome-icons" />
                    </a>
                </div>
                <div class="col-4">
                    <a href="/login">
                        <img src="{{asset('img/signin.png')}}" class="img-fluid welcome-icons" />
                    </a>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-5 text-center">
                    <p><b>Register</b></p>
                </div>
                <div class="col-5 text-center">
                    <p><b>Sign In</b></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
