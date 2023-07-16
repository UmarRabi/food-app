@extends('layouts.white')
@section('content')
    <div class="v19_81">
        @include('_partials.topbar-white')
        <div class="row d-flex justify-content-center">
            <span class="menu-label">
                Menu
            </span>
        </div>
    </div>
    <div class="card">
        <div class="card-head">
            Create
        </div>
        <div class="card-body d-flex justify-content-center" style="overflow: scroll">
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
                        <label for=" style="color: #1a9ad1 !important"" class="control-label">image</label>
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
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
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
