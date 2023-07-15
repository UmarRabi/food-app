@extends('layouts.white')
@section('content')
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
                        <th class="mobile-text">amount</th>
                        <th class="mobile-text" style="width: 100px !important">reference</th>
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
                                <a class="btn btn-primary mobile-text"
                                    href="{{ route('transaction', ['id' => $order->id]) }}">View</a>
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
                                <a class="btn btn-primary mobile-text"
                                    href="{{ route('transaction', ['id' => $pro->id]) }}">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
@endsection
