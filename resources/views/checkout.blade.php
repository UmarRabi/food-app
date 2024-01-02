@extends('layouts.white')
@section('content')
{{-- <div class="row"> --}}
<div class="v19_81">
    @include('_partials.topbar-white')
    <div class="row mt-3">
    </div>
    <div class="row d-flex justify-content-center">
        <span class="menu-label">
            Checkout
        </span>

    </div>
</div>
<div class="row mt-4">
    <div class="container">
        <div class="container">
            <h3 class="order_summary mobile-text" style="font-size: 18px;">Order Summary</h3>
        </div>
        <div class="card-body">
            <?php $total = 0; ?>
            @foreach ($carts as $cart)
            <div class="row d-flex justify-content-center">
                <div class="col-8 mt-2">
                    <div class="rows">
                        <div class="mobile-text list-label col-4">{{ $cart->food->name }} </div>
                        <div class="mobile-text list-label col-4">{{ $cart->food->price * $cart->quantity }}
                        </div>
                        <div class="col-4">
                            <img src="{{ asset($cart->food->image) }}" alt="" style="width: 40px;height:40px;">
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
            <?php $total = $total + $cart->food->price * $cart->quantity; ?>
            @endforeach
        </div>
    </div>
</div>

<div class="row">
    <div class="card-body">

        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <div class="row list-label"><span class="mobile-text col-4">Subtotal</span>
                    <div class="col-6 top-button mobile-text" style="">
                        {{ $total }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-8">
                <div class="row list-label"><span class="col-4 mobile-text">VAT</span>
                    <div class="col-6 top-button mobile-text" style="">
                        0.00
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-8">
                <div class="row list-label"><span class="col-4 mobile-text">Total</span>
                    <div class="col-6 top-button mobile-text" style="">
                        {{ $total }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-8">
                <div class="row list-label"><span class="col-4 mobile-text">Type</span>
                    <div class="col-6 top-button" style="">
                        {{ session('orderType') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="card mt-2" style="margin-bottom: 0%">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h3 class="order_summary mobile-text">Bank Details</h3>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="rows d-flex justify-content-left">
                    <a href="#" class="" style=" margin-right: 20px">
                        <img src="{{ asset('images/master_card.png') }}" alt="" style="width: 60px;">
                    </a>
                    <a href="#" class="" style=" margin-right: 20px">
                        <img src="{{ asset('images/visa.png') }}" alt="" style="width: 60px;">
                    </a>
                    <a href="#" class="" style=" margin-right: 20px">
                        <img src="{{ asset('images/paypal.png') }}" alt="" style="width: 60px; background-size: cover;">
                    </a>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="rows d-flex justify-content-center">
                    <a href="{{ route('initialize') }}" class="btn btn-primary" style="">
                        Make Payment
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3" style="margin-bottom: 0%">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="rows d-flex justify-content-center">
                <button class="btn btn-primary" style="">
                    Checkout
                </button>
            </div>
            <div class="rows d-flex justify-content-center">
                <button class="btn btn-primary top-button" style="">
                    Set Location
                </button>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mb-4 mt-4">

        <button class="col-4 btn btn-primary top-button" style="">
            Track Your Order
        </button>
        <button class="col-4 btn btn-primary top-button" style="">
            Give Feedback
        </button>

    </div>
</div>
{{-- </div> --}}

<style>
    .control-label {
        color: #1a9ad1
    }

    .delivery-text {
        color: #1a9ad1;
        font-family: Lato;
        font-weight: ExtraBold;
        font-size: 24px;
        opacity: 1;
        text-align: center
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-size: 14px;
    }


    .top-button {
        border: solid 2px #1a9ad1;
        background: white;
        color: #1a9ad1
    }

    .v19_82 {
        width: 100%;
        height: 227px;
        background: rgba(25, 153, 208, 0.11999999731779099);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v19_83 {
        width: 261px;
        color: rgba(255, 251, 251, 1);
        position: absolute;
        top: 349px;
        left: 84px;
        font-family: Lato;
        font-weight: Medium;
        font-size: 36px;
        opacity: 1;
        text-align: center;
    }

    .v19_84 {
        width: 216px;
        height: 52px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: absolute;
        top: 710px;
        left: 107px;
        border-top-left-radius: 23px;
        border-top-right-radius: 23px;
        border-bottom-left-radius: 23px;
        border-bottom-right-radius: 23px;
        overflow: hidden;
    }

    .v19_85 {
        width: 143px;
        color: rgba(25, 153, 208, 0.11999999731779099);
        position: absolute;
        top: 722px;
        left: 143px;
        font-family: Lato;
        font-weight: Bold;
        font-size: 24px;
        opacity: 1;
        text-align: center;
    }

    .v19_86 {
        width: 570px;
        height: 598px;
        background: url("../images/v19_86.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 192px;
        left: 70px;
        overflow: hidden;
    }

    .food-show {
        width: 70px;
        height: 70px
    }

    .btn-listing {
        width: 80px;
        font-size: 9px
    }

    .menu-label {
        color: white;
        text-align: center;
        font-size: 28px;
    }

    .listing-blue {
        background: white;
        width: 167px;
        height: 27px;
    }

    .plus {
        color: #000000;
        font-family: Lato;
        font-weight: ExtraBold;
        font-size: 16px;
        opacity: 1;
    }

    .order_summary {
        color: #1a9ad1;
        font-family: Lato;
        font-weight: Black;
        font-size: 16px;
        opacity: 1;
    }

    .list-label {
        color: #000000;
        font-family: Lato;
        font-weight: SemiBold;
        font-size: 14px;
        opacity: 1;
    }
</style>
@endsection