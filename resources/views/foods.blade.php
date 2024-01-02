@extends('layouts.white')
<style>

</style>
@section('content')
<div class="container">
    @include('_partials.topbar-blue')
    <div class="container">
        <div class="container d-flex mt-3 justify-content-center">
            <div class="col-8">
                <span style="color: #1a9ad1;
                        font-family: Lato;
                        font-weight: Bold;
                        font-size: 18px;
                        opacity: 1;">
                    Menu
                </span>
            </div>
            <div class="col-4">
                <div class="row">
                    <a href="{{ route('list-cart-items') }}" class="btn btn-primary top-button" style="">
                        Cart
                    </a>
                </div>
                {{-- <div class="row">
                    <button class="btn btn-primary top-button mt-2" style="">
                        Delivery
                    </button>
                </div> --}}


            </div>
        </div>
    </div>
</div>

<div class="card mx-3" style="">
    @if (session()->has('message'))
    <div class="card-header">
        <?php echo session()->get('message'); ?>
    </div>
    @endif
    <div class="card-body">
        <div class="container d-flex justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-5">
                        <span class="fresh" style="
                                    color: #1a9ad1;
                                    font-family: Lato;
                                    font-weight: Bold;
                                    opacity: 1;">
                            Meals
                        </span>
                    </div>
                    <div class="col-7">
                        <select class="form-control" name="meals" id="meals">
                            <option value="">Select ...</option>
                            <option value="breakfast">Break fast</option>
                            <option value="lunch">Lunch</option>
                            <option value="dinner">Dinner</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="container">
            @foreach ($foods as $food)
            <div class="col-6 mt-2">
                <div class="row">
                    <div class="col-5">
                        <img class="img" src="{{ asset($food->image) }}" alt="">
                    </div>
                    <div class="col-7">
                        <input type="hidden" name="product_id" value="{{ $food->id }}">
                        <div>{{ $food->name }}</div>
                        <div>{{ $food->price }}</div>
                        <a style="width: fit-content" href="{{ route('add-to-cart', ['id' => $food->id]) }}" class="btn-cart btn btn-primary">+
                            Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="card mt-5" style="margin-bottom: 0%">
    <div class="card-body">
        <div class="mt-5 d-flex justify-content-center" style="width: 100%">
            <div class="col-6">
                <div class="row d-flex justify-content-center">
                    <button class="btn btn-primary" style="">
                        Menu
                    </button>
                </div>
                <div class="row mt-2 d-flex justify-content-center">
                    <button class="btn btn-primary top-button" style="">
                        Set Location
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-1 d-flex justify-content-center container">

            <button class="col-4 btn btn-primary top-button" style="">
                Track Your Order
            </button>
            <button class="col-4 btn btn-primary top-button" style="">
                Give Feedback
            </button>

        </div>
        {{-- </div>
    </div> --}}
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
                    document.querySelector('#meals').addEventListener('change', function() {
                        let url = String(window.location)

                        window.location.href = url.split('?')[0] + '?meal=' + this.value
                    })
                }
            }
        </script>

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
                color: #1a9ad1;
                width: inherit;
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