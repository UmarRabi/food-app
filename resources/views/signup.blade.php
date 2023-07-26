@extends('layouts.white')
<style>
    .errors: {
        color: red !important
    }
</style>
@section('content')
    <div class="container">
        <div class="card mt-4" style="background: transparent !important; width:100%">
            <div class="card-header">
                <x-auth-validation-errors class="mb-4 errors" :errors="$errors" />
                <h3 class="delivery-text">Register</h3>
            </div>
            <div class="card-body">
                <form action="" method="post" class="mx-3">
                    @csrf
                    <div class="form-group">
                        <label for="" class="delivery-text">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text">Firstname</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text">Lastname</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text">Phone Number</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="delivery-text">Postal code</label>
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
