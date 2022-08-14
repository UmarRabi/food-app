@extends('layouts.blue-color')
<style>
    .errors:{
        color: red !important
    }
</style>
@section('content')
 <div class="card mt-4" style="background: transparent !important">
    <div class="card-header">
          <x-auth-validation-errors class="mb-4 errors" :errors="$errors" />
        <h3 class="control-label">Register</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="" class="control-label">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Firstname</label>
                <input type="text" name="firstname" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Lastname</label>
                <input type="text" name="lastname" class="form-control">
            </div>
                <div class="form-group">
                <label for="" class="control-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Phone Number</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Postal code</label>
                <input type="text" name="postalcode" class="form-control">
            </div>
            <div class="form-group mt-4">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
 </div>
@endsection()
