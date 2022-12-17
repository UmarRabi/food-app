@extends('layouts.blue-color')
@section('content')
    <div style="display: grid; justify-content:space-between;margin-left:20%">
        <div class="thank-you-for-registering-a-me rows" style="margin-top:40%; width:100vw">
            <span>
                {{ $message }}
            </span>
        </div>
        <div class="rows" style="display: flex;justify-content:center;">
            <a href="{{ route('dashboard') }}" class="btn" onclick="window.location.href={{ route('dashboard') }}"
                style="background: white; color:navy">Ok</a>
        </div>
    </div>
@endsection
