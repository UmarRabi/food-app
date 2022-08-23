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
                    <label for="" style="color: blue">title</label>
                    <input name="title" class="input-bd-blue form-control">
                </div>
                <div class="form-group">
                    <label for="" style="color: blue">Channel</label>
                    <select name="channel" class="input-bd-blue form-control">
                        <option>Zoom</option>
                        <option >Google Meet</option>
                        <option >Microsoft Team</option>
                        <option >Physical </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" style="color: blue">Location</label>
                    <input placeholder="Meeting Link or Physical address" class="input-bd-blue form-control" type="text" name="location" id="location">
                </div>
                <div class="form-group">
                    <label for=""  style="color: blue">Date</label>
                    <input type="date" name="booked_date" id="date" class="input-bd-blue form-control">
                </div>
                <div class="form-group">
                    <label for="" style="color: blue">Time</label>
                    <input type="time" class="input-bd-blue form-control" name="booked_time" id="time">
                </div>
                <div class="form-group">
                    <label for="" style="color: blue">Details</label>
                    <textarea name="details" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="" style="color: blue">Reminder</label>
                    <input type="date" placeholder="Reminder time" name="reminder" class="form-control input-bd-blue">
                </div>
                <div class="form-group"  style="display:grid; justify-items:center">
                    <button class="btn curve-option" style="background: #1067c8;margin-top: 10px;display:grid; justify-items:center; color:white">
                        Book
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection()
