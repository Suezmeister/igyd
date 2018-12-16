@extends('layouts.app')

@section('content')
<div class="container home">

    <h5 class="text-center" style="padding-top:1rem">Hello {{ Auth::user()->name }},</h5>
    <div class="w-100"></div>
    <h5 class="text-center">Here are your purchases</h5>

    <div class="col-12 container">
        <div id="accordion">
            <div class="card" style="top:1rem;">
                <div class="card-header" id="headingOne">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <h5 class="mb-0" style="color:black">
                            Standing Orders
                        </h5>
                    </button>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="list-unstyled row">
                            @if($data['standing_orders']->count() > 0) 
                                @foreach($data['standing_orders'] as $standing_order)
                                <li class="list-group-item col-md-3">
                                    <a href="/receipts/{{$standing_order->id}}">
                                        <img src="{{ $standing_order->drink->img_src }}" alt="yourmom" class="img-fluid receipt-item">
                                    </a>
                                    <h5 class="text-center">{{date('F j, Y \a\t h:i:s A', strtotime($standing_order->created_at))}}</h5>
                                </li>
                                @endforeach
                            @else
                                <li class="list-group-item text-center">
                                    <h5><b>You have no standing orders</b></h5>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card" style="top:1rem;">
                <div class="card-header" id="headingTwo">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        <h5 class="mb-0" style="color:black">
                            Received Orders
                        </h5>
                    </button>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
