@extends('layouts.white')
@section('content')
    <div class="v19_81">
        <div class="v19_82">
            <img style="width: 100%" src="{{ asset('images/food1.png') }}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="card" style="background: transparent !important; width:100%">
            <div class="card-header">

                <x-auth-validation-errors class="mb-4 errors" :errors="$errors" />
                <div class="container text" style="color: #1a9ad1;font-size:18px">Login</div>
            </div>
            <div class="card-body">
                <form action="" method="post" class="mx-3">
                    @csrf
                    <div class="form-group">
                        <label for="" class="delivery-text" style="color:black">Username</label>
                        <input type="email" name="email" class="form-control" style="font-weight: bolder !important">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text" style="color:black">Password</label>
                        <input type="password" name="password" class=" form-control font-weight-bolder">
                    </div>

                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="form-group col-10">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                <div class="row d-flex justify-content-center m-3">

                    <div class="col-md-6 d-flex justify-content-start delivery-text" style="color: #1a9ad1;">
                        Forgot Password
                    </div>
                    <div class="col-md-6 d-flex justify-content-end delivery-text">
                        <a href="{{ route('register') }}" class="text" style=" color:#1a9ad1;">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- </body>

    </html> <br /><br /> --}}
@endsection
