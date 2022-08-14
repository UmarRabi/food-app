@extends('layouts.blue')
@section('content')
    <div class="div">
        @include('_partials.white-header', [($text = 'Search Result')])
    </div>
    @include('_partials.search')
    <div style="display:grid; justify-items:center">
        <div class="curve-option" style="margin-top: 50px;display:grid; justify-items:center">
         <span class="red-label">Statement of Account</span>
        </div>

        <div class="curve-option" style="margin-top: 50px;display:grid; justify-items:center">
            <span class="red-label">Tax Services</span>
        </div>

        <div class="red-label" style="margin-top: 50px; color:red;">
            Fund Investifation
        </div>
    </div>
@endsection()
