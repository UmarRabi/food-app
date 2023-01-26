@extends('layouts.white')
@section('content')
    <div class="row">
        {{-- <div class="row"> --}}
        <img style="width: 100%" src="{{ asset('images/food1.png') }}" alt="">
        {{-- </div> --}}
    </div>
    <a class="row d-flex justify-content-center" href="{{ route('order-type', ['type' => 'delivery']) }}"
        style="cursor: pointer">
        <div class="col-md-12 d-flex justify-content-center" style="margin-top: 15%">
            <img src="{{ asset('images/delivery.svg') }}" alt="Vector1989" class="vector-vector" />
        </div>
        <span class="col-md-12 d-flex justify-content-center delivery-text font-weight-bolder">Swift delivery</span>
    </a>
    <a class="row d-flex justify-content-center" href="{{ route('order-type', ['type' => 'checkin']) }}"
        style="cursor: pointer"">
        <div class="col-md-12 d-flex justify-content-center" style="margin-top: 15%">
            <img src="{{ asset('images/swift.svg') }}" alt="Vector1989" class="vector-vector" />
        </div>
        <span class="col-md-12 delivery-text">Fresh and Sweet</span>
    </a>
    <div class="row d-flex justify-content-center">
        <div class="d-flex justify-content-center" style="margin-top: 20%">
            <a href="{{ route('login') }}" class="btn"
                style="background-color:#1a9ad1;color:white; diplay:flex; text-align:center;">
                Continue
            </a>
        </div>
        {{-- <p class="delivery-text">Fresh and Sweet</p> --}}
    </div>
@endsection
