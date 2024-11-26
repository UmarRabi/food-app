@extends('layouts.white')
@section('content')
    <div class="row">
        {{-- <div class="row"> --}}
        <img style="width: 100%; height: 300px" src="{{ asset('images/ordaar_login_bg.png') }}" alt="">
        {{-- </div> --}}
    </div>
    <a class="row d-flex justify-content-center" href="{{ route('order-type', ['type' => 'delivery']) }}"
        style="cursor: pointer">
        <div class="col-md-12 col-sm-12 d-flex justify-content-center" style="margin-top: 5%">
            <img src="{{ asset('images/delivery.svg') }}" alt="Vector1989" class="vector-vector" />
        </div>
        <div class="col-md-12 col-sm-12 d-flex justify-content-center delivery-text font-weight-bolder">Swift delivery</div>
    </a>
    <a class="row d-flex justify-content-center" href="{{ route('order-type', ['type' => 'checkin']) }}"
        style="cursor: pointer">
        <div class="col-md-12 col-sm-12 d-flex justify-content-center" style="margin-top: 5%">
            <img src="{{ asset('images/swift.svg') }}" alt="Vector1989" class="vector-vector" />
        </div>
        <div class="col-md-12 col-sm-12 delivery-text">Fresh and Sweet</div>
    </a>
    <div class="row d-flex justify-content-center my-3" style="height: fit-content">
        <div class="d-flex justify-content-center">
            <a href="{{ route('login') }}" class="btn"
                style="background-color:#1a9ad1;color:white; diplay:flex; text-align:center;">
                Continue
            </a>
        </div>
        {{-- <p class="delivery-text">Fresh and Sweet</p> --}}
    </div>
@endsection
