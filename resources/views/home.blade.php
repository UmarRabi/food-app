@extends('layouts.blue-color')
@section('content')
<div class="rows container mt-5 mb-5 d-flex justify-content-start" style="margin-left: 30px">
    <svg viewBox="0 0 100 80" width="40" height="40">
         <rect width="100" height="20" style="fill: white"></rect>
         <rect y="30" width="100" height="20" style="fill: white"></rect>
         <rect y="60" width="100" height="20" style="fill: white"></rect>
     </svg>
</div>
<div class="rows" style="margin: 30px">
    <div class="col-6">
        <div class="curve-option-2" onclick="alert()" style="display:grid; justify-items :center;">
            <span class="red-label" style="margin-top:8%">Update Account</span>
        </div>
    </div>
     <div class="col-6" >
        <div class="curve-option-2" onclick="window.location.href={{route('upload')}}" style="display:grid; justify-items :center;">
             <a href="{{route('upload')}}" class="red-label" style="margin-top:8%;">Upload files</a>
        </div>
    </div>
</div>
<div class="rows" style="margin: 30px">
    <div class="col-6" >
        <div class="curve-option-2" style="display:grid; justify-items :center;">
             <span class="red-label" style="margin-top:8%;">Create Account</span>
        </div>
    </div>
     <div class="col-6" >
        <div class="curve-option-2" style="display:grid; justify-items :center;">
             <a href="{{route('appointment')}}" class="red-label" style="margin-top:8%;">Book Appointment</a>
        </div>
    </div>
</div>
<div class="rows" style="margin: 30px">
    <div class="col-6" >
        <div class="curve-option-2" style="display:grid; justify-items :center;">
             <span class="red-label" style="margin-top:8%;">Search Account</span>
        </div>
    </div>
     <div class="col-6" >
        <div class="curve-option-2" style="display:grid; justify-items :center;">
             <span class="red-label" style="margin-top:8%;">Manage Account</span>
        </div>
    </div>
</div>
<div class="rows" style="margin: 30px">
    <div class="col-6" >
        <div class="curve-option-2" style="display:grid; justify-items :center;">
            <span class="red-label" style="margin-top:8%;">File Grouping</span>
        </div>
    </div>
     <div class="col-6" >
        <div class="curve-option-2" style="display:grid; justify-items :center;">
             <span class="red-label" style="margin-top:8%;">Manage Document</span>
        </div>
    </div>
</div>
<div class="rows" style="margin: 30px">
    <div class="col-6" >
        <div class="curve-option-2" style="display:grid; justify-items :center;">
             <span class="red-label" style="margin-top:8%;">Share files</span>
        </div>
    </div>
     {{-- <div class="col-6" style="display:grid; justify-items :center;">
        <div class="curve-option-2">

        </div>
    </div> --}}
</div>
@endsection
