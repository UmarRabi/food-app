@extends('layouts.white')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
        {{-- <link rel="stylesheet" href="{{ asset('styles/style.css') }}"> --}}
    </head>

    <body>
        <div class="v19_81">
            <div class="v19_82">
                <img style="width: 100%" src="{{ asset('images/food1.png') }}" alt="">
            </div>

            {{-- <span class="v19_83">

                im
                Fresh and Sweet
                Foods</span> --}}
            <div class="v19_84"></div><span class="v19_85">Order Online</span>
            <div class="v19_86"></div>
        </div>
        <div class="card">
            <div class="card-header">
                <x-auth-validation-errors class="mb-4 errors" :errors="$errors" />
            </div>
            <div class="card-body">
                <div class="container text" style="color: #1a9ad1;font-size:18px">Login</div>
                <form action="" method="post"" class="row d-flex justify-content-center">
                    @csrf
                    <div class="form-group col-10">
                        <label for="" class="text control-label">Username</label>
                        <input type="email" style="font-size: 40px !important" name="email" class="text form-control">
                    </div>
                    <div class="form-group col-10">
                        <label for="" class="text control-label">Password</label>
                        <input type="password" name="password" class="text form-control">
                    </div>

                    <div class="rows mt-5 d-flex justify-content-center">
                        <div class="form-group col-10">
                            <input style="width: 100%" type="submit" class="btn btn-primary text">
                        </div>
                    </div>
                </form>
                <div class="row d-flex justify-content-center mt-3">
                    {{-- <div class="col-md-5">
                        <button class="btn btn-primary">Submit</button>
                    </div> --}}
                    <div class="col-md-7 d-flex justify-content-end min-text text" style="color: #1a9ad1;">
                        Forgot Password
                    </div>
                </div>

                <div class="rows mt-5 d-flex justify-content-center">
                </div>
                <div class="rows mt-5 d-flex justify-content-center min-text">
                    <a href="{{ route('register') }}" class="text" style=" color:#1a9ad1;">Register</a>
                </div>

            </div>
        </div>

    </body>

    </html> <br /><br />
    <style>
        .control-label {
            color: #1a9ad1
        }

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
            width: 100%;
            height: 214px;
            background: rgba(255, 255, 255, 1);
            opacity: 1;
            position: relative;
            top: 0px;
            left: 0px;
            overflow: hidden;
        }

        .v19_82 {
            width: 100%;
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

        @media screen and (max-width: 992px) {
            .form-control {
                height: 80px !important;
            }

            .text {
                font-size: 40px !important;
            }
        }

        @media screen and (max-width: 600px) {
            .form-control {
                height: 80px !important;
            }

            .text {
                font-size: 40px !important;
            }
        }
    </style>
@endsection
