@extends('layouts.white')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    </head>

    <body>
        <div class="row">
            <div class="row">
                <img src="{{ asset('images/food1.png') }}" alt="">
            </div>

            <span class="v19_83">

                im
                Fresh and Sweet
                Foods</span>
            <div class="v19_84"></div><span class="v19_85">Order Online</span>
            <div class="v19_86"></div>
        </div>
        <a class="row" href="{{ route('order-type', ['type' => 'delivery']) }}" style="cursor: pointer">
            <div class="d-flex justify-content-center" style="margin-top: 15%">
                <img src="{{ asset('images/delivery.svg') }}" alt="Vector1989" class="vector-vector" />
            </div>
            <p class="delivery-text">Swift delivery</p>
        </a>
        <a class="row " href="{{ route('order-type', ['type' => 'checkin']) }}" style="cursor: pointer"">
            <div class="d-flex justify-content-center" style="margin-top: 15%">
                <img src="{{ asset('images/swift.svg') }}" alt="Vector1989" class="vector-vector" />
            </div>
            <p class="delivery-text">Fresh and Sweet</p>
        </a>
        <div class="row ">
            <div class="d-flex justify-content-center" style="margin-top: 5%">
                <a href="{{ route('login') }}" class="btn"
                    style="background-color:#1a9ad1;color:white; diplay:flex; text-align:center;">
                    Continue
                </a>
            </div>
            {{-- <p class="delivery-text">Fresh and Sweet</p> --}}
        </div>
    </body>

    </html> <br /><br />
    <style>

    </style>
@endsection
