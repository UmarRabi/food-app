@extends('layouts.blue-color')
@section('content')
    <div class="rows container mt-5 mb-5 d-flex justify-content-start" style="margin-left: 30px">
        <svg viewBox="0 0 100 80" width="40" height="40">
            <rect width="100" height="20" style="fill: white"></rect>
            <rect y="30" width="100" height="20" style="fill: white"></rect>
            <rect y="60" width="100" height="20" style="fill: white"></rect>
        </svg>
    </div>
    <div class="rows d-flex justify-content-center" style="margin: 30px">
        <div class="col-6">
            <div class="curve-option-2" onclick="window.location.href={{ route('foods') }}"
                style="display:grid; justify-items :center;">
                <a href="{{ route('foods') }}" class="red-label" style="margin-top:8%;">Foods</a>
            </div>
        </div>
    </div>
    <div class="rows d-flex justify-content-center" style="margin: 30px">
        <div class="col-6">
            <div class="curve-option-2" onclick="window.location.href={{ route('transactions') }}"
                style="display:grid; justify-items :center;">
                <a href="{{ route('transactions') }}" class="red-label" style="margin-top:8%;">Orders</a>
            </div>
        </div>
    </div>
@endsection
