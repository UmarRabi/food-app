@extends('layouts.blue-color')
<style>
    * {
        box-sizing: border-box;
    }

    .fresh {
        color: #fffcfc !important;
        font-family: Lato !important;
        font-weight: Bold !important;
        font-size: 36px !important;
        opacity: 1;
    }

    .sub-tag {
        background: rgba(255, 255, 255, 1);
        width: 216px;
        height: 52px;
    }
</style>
@section('content')
    <div class="row justify-content-center">
        <div class="mt-5 d-flex justify-content-center col-12">
            <img style="max-width:40%;max-height:20%;" src="{{ asset('images/Welcome To.png') }}" alt="">
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div style="text-align:center" class="fresh">ORDAAR FRESH</div>
    </div>
    <div class="row justify-content-center fresh">
        <a href="{{ route('continue') }}" class="btn fresh">
            Order Online
        </a>
    </div>
@endsection
