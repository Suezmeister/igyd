@extends('layouts.app')

@section('content')
<div class="container">
    <div class="offset-md-2 col-md-8 ">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="my-title">
                        I Got Your Drink
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="my-subtitle">
                        Already Have an Account?
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-3 offset-sm-1 col-sm-4 col-xs-12">
                    <div class="row">
                        <a href="/register" class="btn register"></a>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <h4 class="my-subtitle">Register</h4>
                        </div>
                    </div>
                </div>
                <div class="offset-md-1 col-md-4 offset-sm-1 col-sm-4 col-xs-12">
                    <div class="row">
                        <a href="/login" class="btn login"></a>
                    </div>
                    <div class="row">
                        <div class="offset-md-4">
                            <h4 class="my-subtitle">Sign In</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
