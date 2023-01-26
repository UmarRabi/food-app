@extends('layouts.white')
@section('content')
    {{-- <!DOCTYPE html>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    </head>

    <body> --}}
    <div class="v19_81">
        <div class="v19_82">
            <img style="width: 100%" src="{{ asset('images/food1.png') }}" alt="">
        </div>
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
                    <label for="" class="control-label">Username</label>
                    <input type="email" name="email" class="form-control font-weight-bolder">
                </div>
                <div class="form-group col-10">
                    <label for="" class=" control-label">Password</label>
                    <input type="password" name="password" class=" form-control font-weight-bolder">
                </div>

                <div class="row mt-5 d-flex justify-content-center">
                    <div class="form-group col-10">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
            <div class="row d-flex justify-content-center mt-3">

                <div class="col-md-6 d-flex justify-content-start min-text text" style="color: #1a9ad1;">
                    Forgot Password
                </div>
                <div class="col-md-6 d-flex justify-content-end min-text">
                    <a href="{{ route('register') }}" class="text" style=" color:#1a9ad1;">Register</a>
                </div>
            </div>
        </div>
    </div>

    {{-- </body>

    </html> <br /><br /> --}}
@endsection
