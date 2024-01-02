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

<div class="container d-flex justify-content-around" style="width:100%; display:flex; flex: 1; flex-direction: column;">

    <div class="" style="margin: 0 auto;">
        <img height="40" width="250" style="text-align: center;" src="{{ asset('images/Welcome To.png') }}" alt="">

        <div class="fresh">ORDAAR FRESH</div>
    </div>
    <div class="row justify-content-center">
        <div style="width: 250px;">
            <a href="{{ route('continue') }}" style="width:220px; height: 50px; border-radius: 20px; background-color: white; color: #1999D0; align-content: center;" class="btn btn-primary">
                <b>ENTER</b>
            </a>
        </div>
    </div>
</div>
@endsection