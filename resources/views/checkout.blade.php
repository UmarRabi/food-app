@extends('layouts.white')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    </head>

    <body style="height:100vh">
        <div class="v19_81">
            @include('_partials.topbar-white')
            <div class="row mt-3">
                <div class="col-8">

                </div>
                <div class="col-4">
                    {{-- <button class="btn btn-primary top-button" style="">
                        View Cart
                    </button> --}}
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <span class="menu-label">
                    Checkout
                </span>

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-5">
                                <div class="listing-blue"></div>
                            </div>
                            <div class="col-4">
                                {{-- <button class="btn btn-primary">
                                    Drinks
                                </button> --}}
                            </div>
                        </div>


                    </div>

                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-5">
                                <div class="listing-blue"></div>
                            </div>
                            <div class="col-4">
                                {{-- <button class="btn btn-primary">
                                    Drinks
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <?php $total = 0; ?>
                @foreach ($carts as $cart)
                    <div class="row d-flex justify-content-center">
                        <div class="col-8 mt-2">
                            <div class="rows">
                                <div class="list-label col-4">{{ $cart->food->name }} </div>
                                <div class="list-label col-4">{{ $cart->food->price * $cart->quantity }} </div>
                                <div class="col-4">
                                    <img src="{{ asset($cart->food->image) }}" alt=""
                                        style="width: 40px;height:40px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $total = $total + $cart->food->price * $cart->quantity; ?>
                @endforeach
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h3 class="order_summary">Order Summary</h3>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-8">
                        <div class="row list-label"><span class="col-2">Subtotal</span>
                            <div class="col-4 top-button" style="">
                                {{ $total }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-8">
                        <div class="row list-label"><span class="col-2">VAT</span>
                            <div class="col-4 top-button" style="">
                                0.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-8">
                        <div class="row list-label"><span class="col-2">Total</span>
                            <div class="col-4 top-button" style="">
                                {{ $total }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-8">
                        <div class="row list-label"><span class="col-2">Type</span>
                            <div class="col-4 top-button" style="">
                                {{ session('orderType') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h3 class="order_summary">Bank Details</h3>
                </div>
                {{-- <div class="row">
                    <h5>Payment Options</h5>
                    <div class="col-4">
                        <button class="btn btn-primary">Card</button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary">PayPal</button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-primary">Transfer</button>
                    </div>
                </div> --}}

                {{-- <div class="row d-flex justify-content-center mt-3">
                    <div class="col-8">
                        <div class="row list-label"><span class="col-2">Name</span>
                            <div class="col-6 top-button" style="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-8">
                        <div class="row list-label"><span class="col-2">Country</span>
                            <div class="col-6 top-button" style="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-8">
                        <div class="row list-label"><span class="col-2">Address</span>
                            <div class="col-6 top-button" style="">

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="card mt-5" style="margin-bottom: 0%">
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
        <div class="card mt-5" style="margin-bottom: 0%">
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
            <div class="row d-flex justify-content-center">

                <button class="col-4 btn btn-primary top-button" style="">
                    Track Your Order
                </button>
                <button class="col-4 btn btn-primary top-button" style="">
                    Give Feedback
                </button>

            </div>
        </div>

    </body>

    </html> <br /><br />
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

        .v19_81 {
            width: 100%;
            height: 200px;
            background: #1a9ad1;
            ;
            opacity: 1;
            position: relative;
            top: 0px;
            left: 0px;
            overflow: hidden;
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
