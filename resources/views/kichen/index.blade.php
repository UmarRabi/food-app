@extends('layouts.blue-color')
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-size: 14px;
        height: 100vh !important;
    }

    .fresh {
        color: #fffcfc !important;
        font-family: Lato;
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
    {{-- <div class="row d-flex justify-content-center">
        <span style="margin-top: 20%">
            <img src="{{ asset('images/Welcome To.png') }}" alt="">
        </span>
    </div> --}}
    <div class="row d-flex justify-content-center">
        <div style="margin-top: 5%; width:250px; text-align:center" class="fresh">ORDAAR <br />Kitchen</div>
        <div class="row d-flex justify-content-center fresh" style="margin-top: 0%">
            <a href="{{ route('foods') }}" class="btn fresh">
                Menu
            </a>
        </div>
        <div class="row d-flex justify-content-center fresh" style="margin-top: 0%">
            <a href="{{ route('kitchen.orders') }}" class="btn fresh">
                Orders
            </a>
        </div>
    </div>
@endsection
