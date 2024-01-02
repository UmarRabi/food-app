@extends('layouts.white')
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
    }

    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 2px;
        text-decoration: none;
        font-size: 14px;
        line-height: 25px;
        border-radius: 4px;
    }

    .header a.logo {
        font-size: 20px;
        font-weight: bold;
    }

    .header a:hover {
        background-color: #ddd;
        color: black;
    }

    .active-delivery-menu-item {
        display: flex;
        background-color: white;
        padding: 10px;
        border-radius: 8px;
        justify-content: flex-start;
        margin-left: 10px;
        margin-bottom: 40px;
        align-items: center;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }

    .card {
        margin: auto;
        border: solid 1px #dbdad7;
        width: 40%;
        padding-left: 10px !important;
        padding-bottom: 10px !important;
        padding-right: 10px !important;
        padding-top: 0px !important
    }

    .card-title {
        margin: auto;
        padding: 15px;
        background-color: #1999D0;
        color: white;
        width: 80%
    }

    .delivery-menu-item {
        display: flex;
        justify-content: flex-start;
        margin-left: 20px;
        margin-bottom: 40px;
        align-items: center;
    }

    div.card-body {
        padding: 0px
    }

    .custom-select {
        width: 100%
    }

    .delivery-menu-text {
        color: white;
        font-weight: bold;
    }

    .btn2 {
        margin-left: 10%
    }

    input {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }

    input:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    select {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #d1d1cf !important
    }

    .delivery-menu-icon {
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
        margin-top: 10px;
        align-items: center;
    }

    select:focus {
        border-color: #d1d1cf !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important
    }

    .radiobtn {
        margin-left: 3.5%
    }

    .transparent-input {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #ccc;
        /* You can adjust the border style as needed */
    }

    .icons {
        margin: auto !important
    }

    .fa {
        border-radius: 25px;
        width: 10%;
        margin-left: 5%;
        border: solid 2px #dbdad7;
        margin-top: 5%;
        text-align: center
    }

    .fa-plane {
        color: #1cad9f
    }

    .fa-taxi {
        color: #c2f700
    }

    .fa-train {
        color: red
    }

    @media only screen and (max-width: 600px) {
        .card {
            margin: auto;
            border: solid 1px #dbdad7;
            width: 90%;
            padding-left: 10px !important;
            padding-bottom: 10px !important;
            padding-right: 10px !important;
            padding-top: 0px !important
        }

        .fa {
            border-radius: 25px;
            width: 15%;
            margin-left: 5%;
            border: solid 2px #dbdad7;
            margin-top: 5%;
            text-align: center
        }
    }

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

    .menu-label {
        color: white;
        text-align: center;
        font-size: 28px;
    }

    .listing-blue {
        background: rgba(25, 153, 208, 0.8100000023841858);
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

    .list-label {
        color: #000000;
        font-family: Lato;
        font-weight: SemiBold;
        font-size: 14px;
        opacity: 1;
    }
</style>
@section('content')

<div class="row">

    <div class="row" style="width: 100%;">
        <div class="col-md-10 offset-1" style="margin-top: 40px;">
            <!--Card-->
            <!--Card-Body-->
            <div class="card-body">
                <!--Card-Title-->
                <div class="icons text-left">

                    @if ($message = Session::get('error'))
                    <div class="col-md-12" role="alert">
                        <div class="alert alert-danger mb-4" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></button>
                            {{$message}}
                        </div>
                    </div>
                    @endif

                    @if ($message = Session::get('success'))
                    <div class="col-md-12" role="alert">
                        <div class="alert alert-success mb-4" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></button>
                            {{$message}}
                        </div>
                    </div>
                    @endif

                    <div class="row" style="width: 100%;">

                        @include('_partials.delivery_menu')

                        <div class="col-md-8" style="padding-top: 80px; margin-left:20px; padding-right: 40px; padding-left: 30px; padding-bottom: 80px; justify-content: center;  border-radius: 8px; margin-bottom: 100px; margin-top: 30px">

                            @include('_partials.logout')

                            <div class="mt-5"></div>


                            <h2 class="center"><b>Food Orders</b></h2>

                            <div class="row">
                                <div class="v19_81">
                                    @include('_partials.topbar-white')
                                    <div class="row d-flex justify-content-center">
                                        <span class="menu-label">
                                            Orders
                                        </span>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">Processing</div>
                                    <div class="card-body d-flex justify-content-center" style="overflow: scroll">
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="mobile-text">Amount</th>
                                                    <th class="mobile-text" style="width: 100px !important">Reference</th>
                                                    <th>Order <br>Status</th>
                                                    <th>Payment Status</th>
                                                    <th class="mobile-text">Date</th>
                                                    <th class="mobile-text">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                <tr>
                                                    <td class="mobile-text">{{ $order->total }}</td>
                                                    <td class="mobile-text">{{ $order->reference }}</td>
                                                    <td class="mobile-text">{{ $order->delivery_status }}</td>
                                                    <td class="mobile-text">{{ $order->status }}</td>
                                                    <td class="mobile-text">{{ $order->created_at }}</td>
                                                    {{-- <td>{{ $transaction->channel }}</td> --}}
                                                    <td>
                                                        <a class="btn btn-primary mobile-text" href="{{ route('transaction', ['id' => $order->id]) }}">View</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">Processed</div>
                                    <div class="card-body" style="overflow: scroll">
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="mobile-text">amount</th>
                                                    <th class="mobile-text" style="width: 100px !important">reference</th>
                                                    <th>Order <br>Status</th>
                                                    <th>Payment Status</th>
                                                    <th class="mobile-text">Date</th>
                                                    <th class="mobile-text">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($processed as $pro)
                                                <tr>
                                                    <td class="mobile-text">{{ $pro->total }}</td>
                                                    <td class="mobile-text">{{ $pro->reference }}</td>
                                                    <td class="mobile-text">{{ $pro->delivery_status }}</td>
                                                    <td class="mobile-text">{{ $pro->status }}</td>
                                                    <td class="mobile-text">{{ $pro->created_at }}</td>
                                                    {{-- <td>{{ $transaction->channel }}</td> --}}
                                                    <td>
                                                        <a class="btn btn-primary mobile-text" href="{{ route('transaction', ['id' => $pro->id]) }}">View</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</div>


@endsection