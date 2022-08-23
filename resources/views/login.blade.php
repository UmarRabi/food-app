@extends('layouts.blue-color')
@section('content')
 <div class="card mt-4" style="background: transparent !important">
    <div class="card-header" style="height:200px">
        <x-auth-validation-errors class="mb-4 errors" :errors="$errors" />
        <div class="file-cabinet-img d-flex justify-content-center" >
            <img
            loading="lazy"
            src="{{asset('images/file-cabinet.png')}}"

            class="image-file-cabinet mt-3"
            />
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="" class="control-label">Username</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
             <div class="rows mt-5">
                <div class="col-md-5">
                    <button class="btn btn-primary">Submit</button>
                </div>
               <div class="col-md-7 d-flex justify-content-end min-text">
                    Forgot Password
                </div>
            </div>
        </form>
        <div class="rows mt-5 d-flex justify-content-center min-text">
            Login with Facebook
        </div>
        <div class="rows d-flex justify-content-center min-text">
            Login with Google
        </div>

        <div class="rows mt-5 d-flex justify-content-center">
        </div>
        <div class="rows mt-5 d-flex justify-content-center min-text">
            <a href="{{route('register')}}" style="color: white">Register</a>
        </div>

    </div>
 </div>
@endsection()
