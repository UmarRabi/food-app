@extends('layouts.white')
<style>
    .errors {
        color: red !important
    }
</style>
@section('content')
<div class="v19_81">
    <div class="v19_82">
        <img style="width: 100%; height: 300px" src="{{ asset('images/ordaar_login_bg.png') }}" alt="">
    </div>
</div>
<div class="row justify-content-center">
    <div class="card mt-4 col-xl-4" style="background: transparent !important;">

        <div class="card-body">
            <form action="" method="post" class="mx-3">
                @csrf
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Firstname</label>
                    <input type="text" name="firstname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Lastname</label>
                    <input type="text" name="lastname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Phone Number</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="delivery-text mt-4">Postal code</label>
                    <input type="text" name="postalcode" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection()
