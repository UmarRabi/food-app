@extends('layouts.blue-color')
@section('content')
<div class="row justify-content-center">
    <div class="col-xl-4"" style="margin-top: 200px;">
        <div class="d-flex justify-content-center">
            <span class="text" style="color: white">
                {{ $message }}
            </span>
        </div>
        <div class="d-flex mt-3 justify-content-center">
            <a href="{{ route('dashboard') }}" class="btn" onclick="window.location.href={{ route('dashboard') }}"
                style="background: white; color:navy">Ok</a>
        </div>
    </div>
</div>
@endsection
