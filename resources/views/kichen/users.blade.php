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
</style>
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


                            <h2 class="center"><b>Food Menu</b></h2>

                            <div class="row">
                                <div class="table mt-5" style="width:100%">
                                    @if($users->count()>0)
                                    <table style="width:100%" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/No</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($users as $key=>$a)
                                            <tr>
                                                <td>{{($key+1)}}</td>
                                                <td>{{($a->firstname)}} </td>
                                                <td>{{($a->lastname)}} </td>
                                                <td>{{($a->email)}} </td>
                                                <td>{{($a->phone)}} </td>
                                                <td>{{($a->address)}} </td>

                                                <!-- <td>&#8358;{{($a->delivery_amount)}}</td> -->
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    @else
                                    <p>No trip found</p>

                                    @endif

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