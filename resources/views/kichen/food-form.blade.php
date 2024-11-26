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


                            <h2 class="center d-flex justify-content-center"><b>Food Menu</b></h2>
                            {{-- <div class="card">
                                <div class="card-body d-flex justify-content-center" style="overflow: scroll"> --}}
                                    <div class="row justify-content-center">
                                        <form action="{{ route('food.save') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $food ? $food->id : '' }}">
                                            <div class="form-group">
                                                <label for="" style="color: #1a9ad1 !important" class="control-label">Name</label>
                                                <input type="text" value="{{ $food ? $food->name : '' }}" name="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" style="color: #1a9ad1 !important" class="control-label">Price</label>
                                                <input type="text" value="{{ $food ? $food->price : '' }}" name="price" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for=" style=" color: #1a9ad1 !important"" class="control-label">image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" style="color: #1a9ad1 !important" class="control-label">Stoked</label>
                                                <select name="stocked" id="" class="form-control">
                                                    <option {{ $food ? ($food->stocked ? 'selected' : '') : '' }} value="1">Stoked</option>
                                                    <option {{ $food ? (!$food->stocked ? 'selected' : '') : '' }} value="0">Out of Stoke
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="" style="color: #1a9ad1 !important" class="control-label">Meal</label>
                                                <select class="form-control" name="meals" id="meals">
                                                    <option value="">Select ...</option>
                                                    <option value="breakfast">Break fast</option>
                                                    <option value="lunch">Lunch</option>
                                                    <option value="dinner">Dinner</option>
                                                    <option value="drinks">Drinks</option>
                                                    <option value="beverage">Beverage</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary">
                                                    Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                {{-- </div>
                            </div> --}}

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
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
