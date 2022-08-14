@extends('layouts.white')
@section('content')
    <div class="div">
        @include('_partials.red-header', [($text = 'Contact Details')])
    </div>
   <div class="card" style="background: transparent !important">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="" class=" red-label">First Name</label>
                      <input type="text" name="firstname" id="firstname" class="input-bd-red form-control">
                </div>
                <div class="form-group">
                    <label for="" class=" red-label">Last Name</label>
                      <input type="text" name="lastname" id="lastname" class="input-bd-red form-control">
                </div>
                <div class="form-group">
                    <label for="" class=" red-label">Mobile Number</label>
                    <input type="text" name="phone" id="phone" class="input-bd-red form-control">
                </div>
                <div class="form-group">
                    <label for="" class="red-label">Email Address</label>
                    <input type="text" name="email" id="email" class="input-bd-red form-control">
                </div>
                 <div class="form-group">
                    <label for="" class="red-label">Postal Codes</label>
                    <input type="text" name="postal_code" id="postal_code" class="input-bd-red form-control">
                </div>
                 <div class="form-group">
                    <label for="" class="red-label">City</label>
                    <input type="text" name="city" id="city" class="input-bd-red form-control">
                </div>
                <div class="form-group">
                    <label for="" class=" red-label">Address</label>
                   <textarea name="" id="" class="input-bd-red form-control"></textarea>
                </div>
                <div class="form-group mt-4"  style="display:grid; justify-items:center">
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-danger">
                                Submit
                            </button>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                             <button class="btn btn-danger" type="button">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-4"  style="display:grid; justify-items:center">
                    <a href="" style="color: red">Continue</a>
                </div>
            </form>
        </div>
    </div>
@endsection()
