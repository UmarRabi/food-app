@extends('layouts.white')
@section('content')
<div class="v19_81">
    <div class="v19_82">
        <img style="width: 100%; height: 300px" src="{{ asset('images/ordaar_login_bg.png') }}" alt="">
    </div>
</div>
<div class="row justify-content-center">
    <div class="card col-xl-4 col-sm-12" style="background: transparent !important;">

        <div class="card-body">
            <h4 class="mb-4 mt-4" style="color: #1999D0; margin-left: 10px">Login</h4>
            <form action="" method="post" class="mx-3">
                @csrf
                <div class="form-group">
                    <label for="" class="delivery-text" style="font-size: 20px !important">Email</label>
                    <input type="email" name="email" class="form-control" style="font-weight: bolder !important">
                </div>
                <div class="mt-4"></div>
                <div class="form-group">
                    <label for="" class="delivery-text">Password</label>
                    <input type="password" name="password" class="form-control font-weight-bolder">
                </div>

                <div class="form-group mt-4 mb-2">
                    <input type="submit" class="btn btn-primary btn-block">
                </div>
            </form>
            <div class="row d-flex justify-content-center m-3">
                {{-- <div class="col-md-6 d-flex justify-content-start" >
                    <a href="#" style="font-size: 18px;"> Forgot Password</a>
                </div> --}}
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{ route('register') }}" style="font-size: 18px;">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- </body>

    </html> <br /><br /> --}}
@endsection
