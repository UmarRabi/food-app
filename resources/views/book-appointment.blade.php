@extends('layouts.white')
@section('content')
    <div class="div">
        @include('_partials.white-header', [($text = 'Book Appointment')])
    </div>
   <div class="card" style="background: transparent !important">
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="" class="control-label">Services</label>
                    <select name="service_code" class="input-bd-blue form-control"></select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Location</label>
                    <select name="location" class="input-bd-blue form-control"></select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Employee</label>
                    <select name="user_id" class="input-bd-blue form-control"></select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Date</label>
                    <input type="date" name="booked_date" id="date" class="input-bd-blue form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Time</label>
                    <input type="booked_time" class="input-bd-blue form-control" name="time" id="time">
                </div>
                <div class="form-group"  style="display:grid; justify-items:center">
                    <div class="curve-option" style="background: #1067c8;margin-top: 10px;display:grid; justify-items:center">
                        <span class="white-label">Book</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection()
