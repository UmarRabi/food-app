@extends('layouts.white')

@section('content')
    <style>
        .fade:not(.show):not(.active) {
            display: none !important;
        }
    </style>
    <div>
        <div style="height:400px; background-image: url('/images/header_photo.png'); background-size: cover;">
            <div
                style="height:400px; padding-top: 100px; padding-bottom: 100px; background-color: rgba(25, 153, 208, 0.8); z-index: 2;">
                <div class="container">

                    <div class=""
                        style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                        <a href="{{ route('kitchen') }}" style="margin-right: 10px;">
                            <i class="fa-solid fa-home fa-3x" style="color: white"></i>
                        </a>
                        <a href="{{ route('logout') }}">
                            <img src="{{ asset('images/search_pile.png') }}" width="50" height="50" />
                        </a>
                    </div>

                    <h4 style="margin-top: 20px; font-size:40px; text-align: center; color: white; font-weight: bold">
                        {{ $title ?? 'Order' }}</h4>
                </div>
            </div>
        </div>

        <div class="my-3 row justify-content-center">
            <div class="d-flex justify-content-center col-6"
                style="background-color:#1a9ad1;color:white; diplay:flex; text-align:center;">

            </div>
        </div>
        <nav>
            <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                <button style="background-color:#1a9ad1;color:white; diplay:flex; text-align:center; width:20%;"
                    class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                    role="tab" aria-controls="nav-home" aria-selected="true">Mark Order As</button>
                <button style="background-color:#1a9ad1;color:white; diplay:flex; text-align:center; width:20%;"
                    class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                    role="tab" aria-controls="nav-profile" aria-selected="false">New Order</button>
                <button style="background-color:#1a9ad1;color:white; diplay:flex; text-align:center; width:20%;"
                    class="nav-link" id="nav-pending-tab" data-bs-toggle="tab" data-bs-target="#nav-pending" type="button"
                    role="tab" aria-controls="nav-pending" aria-selected="false">In Progress</button>
                <button style="background-color:#1a9ad1;color:white; diplay:flex; text-align:center; width:20%;"
                    class="nav-link" id="nav-completed-tab" data-bs-toggle="tab" data-bs-target="#nav-completed"
                    type="button" role="tab" aria-controls="nav-completed" aria-selected="false">Completed</button>
            </div>
        </nav>


        <div class="tab-content d-flex justify-content-center" id="nav-tabContent">
            <div class="col-8">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Tab One
                    active
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    @foreach ($allOrders as $order)
                    <div class="d-flex mt-3">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body" style="background:#dee2e6">
                                    <h3>{{ $order->transaction->order_type }}</h3>
                                    <span style="color: red">{{ $order->cart->food->name }},{{ $order->transaction->status == 'completed' ? 'Paid' : 'Declined' }} </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <img style="width: 400px; height:70px;" src="{{ asset($order->cart->food->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
                    @foreach ($orders as $order)
                        @include('kichen.orders._partials.food', ['order' => $order])
                    @endforeach
                </div>
                <div class="tab-pane fade" id="nav-completed" role="tabpanel" aria-labelledby="nav-completed-tab">
                    @foreach ($processed as $order)
                        @include('kichen.orders._partials.food', ['order' => $order])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
