@extends('layouts.white')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    </head>

    <body style="height:100vh">
        <div class="v19_81">
            @include('_partials.topbar-blue')
            <div class="row mt-3">
                <div class="col-8">
                    <span
                        style=" color: #1a9ad1;
                        font-family: Lato;
                        font-weight: Bold;
                        font-size: 32px;
                        opacity: 1;">
                        Foods
                    </span>
                </div>
                <div class="col-4">
                    <a href="{{ route('list-cart-items') }}" class="btn btn-primary top-button" style="">
                        Cart
                    </a>
                    <button class="btn btn-primary top-button" style="">
                        Delivery
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                @if (session()->has('message'))
                    <?php echo session()->get('message'); ?>
                @endif
            </div>
            <div class="card-body">
                <div class="row">

                    @foreach ($foods as $food)
                        <div class="col-6 mt-2">
                            <div class="rows">
                                <div class="col-5">
                                    <img class="food-show" src="{{ asset($food->image) }}" alt="">
                                </div>
                                <div class="col-7">
                                    <input type="hidden" name="product_id" value="{{ $food->id }}">
                                    <div class="listing-text">{{ $food->name }}</div>
                                    <div class="listing-text">{{ $food->price }}</div>
                                    <a href="{{ route('add-to-cart', ['id' => $food->id]) }}"
                                        class="btn-cart btn btn-primary btn-listing">Add
                                        To
                                        Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card mt-5" style="margin-bottom: 0%">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="rows d-flex justify-content-center">
                        <button class="btn btn-primary" style="">
                            Menu
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
    <script type="text/javascript">
        document.onreadystatechange = function() {
            if (document.readyState == 'complete') {
                document.querySelectorAll('.btn-cart').forEach((e) => {
                    e.addEventListener('click', function() {
                        let id = this.getAttribute('data')
                        let url = window.location.origin + '/user/cart/' + id
                        fetch(url, {

                        })
                    })
                })
            }
        }
    </script>

    </html>
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
            background: rgba(255, 255, 255, 1);
            opacity: 1;
            position: relative;
            top: 0px;
            left: 0px;
            overflow: hidden;
        }

        .top-button {
            border-style: solid 2px #1a9ad1;
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
    </style>
@endsection
