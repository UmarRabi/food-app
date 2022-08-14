@extends('layouts.white')
@section('content')
    <div class="div">
        @include('_partials.white-header', [($text = 'Manage Document')])
    </div>
    <div style="display:grid; justify-items:center" >
        <div class="rows" style="margin-top: 10px;">
            <div class="col-md-2">
                <svg margin-top="10px" width="40" height="50" stroke-width="1.5" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg"> <path d="M19 3L5 3C3.89543 3 3 3.89543 3 5L3 19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 7L17 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 12L17 12" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 17L13 17" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> </svg>
            </div>
            <div class="col-md-7">
                <div class="curve-option" style="background: #1067c8;display:grid; justify-items:center">
                    <span class="white-label">All Files</span>
                </div>
            </div>
        </div>
        <div class="rows" style="margin-top: 10px;">
            <div class="col-md-2">
                 <svg margin-top="10px" width="40" height="50" stroke-width="1.5" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg"> <path d="M19 3L5 3C3.89543 3 3 3.89543 3 5L3 19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 7L17 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 12L17 12" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 17L13 17" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> </svg>
            </div>
            <div class="col-md-10">
                <div class="curve-option" style="background: #1067c8;margin-top: 10px;display:grid; justify-items:center">
                    <span class="white-label">Recent Files</span>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="col-md-2">
                <svg viewBox="0 0 1024 1024" width="40" height="50" xmlns="http://www.w3.org/2000/svg"><path fill="red" d="M544 864V672h128L512 480 352 672h128v192H320v-1.6c-5.376.32-10.496 1.6-16 1.6A240 240 0 0 1 64 624c0-123.136 93.12-223.488 212.608-237.248A239.808 239.808 0 0 1 512 192a239.872 239.872 0 0 1 235.456 194.752c119.488 13.76 212.48 114.112 212.48 237.248a240 240 0 0 1-240 240c-5.376 0-10.56-1.28-16-1.6v1.6H544z"/></svg>
            </div>
            <div class="col-md-7">
                <div class="curve-option" style="background: #1067c8;margin-top: 10px;display:grid; justify-items:center">
                    <span class="white-label">Upoad Files</span>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="col-md-2">
                 <svg margin-top="10px" width="40" height="50" stroke-width="1.5" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg"> <path d="M19 3L5 3C3.89543 3 3 3.89543 3 5L3 19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 7L17 7" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 12L17 12" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7 17L13 17" stroke="white" stroke-linecap="round" stroke-linejoin="round"/> </svg>
            </div>
            <div class="col-md-7">
                <div class="curve-option" style="background: #1067c8;margin-top: 10px;display:grid; justify-items:center">
                    <span class="white-label">Review Document</span>
                </div>
            </div>
        </div>
         <div class="rows">
            <div class="col-md-2">
                <svg viewBox="0 0 1024 1024" width="40" height="50" xmlns="http://www.w3.org/2000/svg"><path fill="red" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg>
            </div>
            <div class="col-md-7">
                <div class="curve-option" style="background: #1067c8;margin-top: 10px;display:grid; justify-items:center">
                    <span class="white-label">Delete File</span>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class="col-md-2">
                <svg fill="red" width="40" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M7 5V4H5v2H3v14h14V6h-2V4h-2v2H7V5zm-2 5V8h10v2H5zm0 2h10v6H5v-6zm16-3V8h-2v6h2V9zm0 6h-2v2h2v-2z" fill="red"/> </svg>
            </div>
            <div class="col-md-7">
                <div class="curve-option" style="background: #1067c8;margin-top: 10px;display:grid; justify-items:center">
                    <span class="white-label">Enable Alert</span>
                </div>
            </div>
        </div>
    </div>
@endsection()
