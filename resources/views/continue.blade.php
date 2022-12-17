@extends('layouts.white')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    </head>

    <body>
        <div class="v19_81">
            <div class="v19_82">
                <img src="{{ asset('images/food1.png') }}" alt="">
            </div>

            <span class="v19_83">

                im
                Fresh and Sweet
                Foods</span>
            <div class="v19_84"></div><span class="v19_85">Order Online</span>
            <div class="v19_86"></div>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-center" style="margin-top: 15%">
                <img src="{{ asset('images/delivery.svg') }}" alt="Vector1989" class="vector-vector" />
            </div>
            <p class="delivery-text">Swift delivery</p>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-center" style="margin-top: 15%">
                <img src="{{ asset('images/swift.svg') }}" alt="Vector1989" class="vector-vector" />
            </div>
            <p class="delivery-text">Fresh and Sweet</p>
        </div>
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
        .delivery-text {
            color: #1a9ad1;
            font-family: Lato;
            font-weight: ExtraBold;
            font-size: 24px;
            opacity: 1;
            text-align: center
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-size: 14px;
        }

        .v19_81 {
            width: 430px;
            height: 214px;
            background: rgba(255, 255, 255, 1);
            opacity: 1;
            position: relative;
            top: 0px;
            left: 0px;
            overflow: hidden;
        }

        .v19_82 {
            width: 430px;
            height: 227px;
            background: rgba(25, 153, 208, 0.11999999731779099);
            opacity: 1;
            position: relative;
            top: 0px;
            left: 0px;
            overflow: hidden;
        }

        .v19_83 {
            width: 261px;
            color: rgba(255, 251, 251, 1);
            position: absolute;
            top: 349px;
            left: 84px;
            font-family: Lato;
            font-weight: Medium;
            font-size: 36px;
            opacity: 1;
            text-align: center;
        }

        .v19_84 {
            width: 216px;
            height: 52px;
            background: rgba(255, 255, 255, 1);
            opacity: 1;
            position: absolute;
            top: 710px;
            left: 107px;
            border-top-left-radius: 23px;
            border-top-right-radius: 23px;
            border-bottom-left-radius: 23px;
            border-bottom-right-radius: 23px;
            overflow: hidden;
        }

        .v19_85 {
            width: 143px;
            color: rgba(25, 153, 208, 0.11999999731779099);
            position: absolute;
            top: 722px;
            left: 143px;
            font-family: Lato;
            font-weight: Bold;
            font-size: 24px;
            opacity: 1;
            text-align: center;
        }

        .v19_86 {
            width: 570px;
            height: 598px;
            background: url("../images/v19_86.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            position: absolute;
            top: 192px;
            left: 70px;
            overflow: hidden;
        }
    </style>
@endsection
