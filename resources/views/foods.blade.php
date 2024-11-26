@extends('layouts.white')
@section('content')
    <div class="">
        @include('_partials.topbar-blue')
        {{-- <div class="container"> --}}
        <div class="row m-3 justify-content-center">
            <div class="col-8">
                <span
                    style="color: #1a9ad1;
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
        {{-- </div> --}}
    </div>

    <div class="card mx-3" style="">
        @if (session()->has('message'))
            <div class="card-header">
                <?php echo session()->get('message'); ?>
            </div>
        @endif
        <div class="card-body d-flex justify-content-center">
            <div class="container col-xl-6">
                <div class="col-10">
                    <div class="row">
                        <div class="col-md-6">
                            <label style="font-size: 18px;">Meals</label>
                            <select class="form-control" name="meals" id="meals">
                                <option value="">Select ...</option>
                                <option value="breakfast">Break fast</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                                <option value="drinks">Drinks</option>
                                <option value="beverage">Beverage</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-xl-5">
                @foreach ($foods as $food)
                        <div class="row">
                            <div class="col-5">
                                <img class="img" src="{{ asset($food->image) }}" alt="">
                            </div>
                            <div class="col-7">
                                <input type="hidden" name="product_id" value="{{ $food->id }}">
                                <div>
                                    <h6>{{ $food->name }}</h6>
                                </div>
                                <div>
                                    <h6 style="color: #777">&#8358;{{ $food->price }}
                                        <h6>
                                </div>
                                <a style="width: fit-content" href="{{ route('add-to-cart', ['id' => $food->id]) }}"
                                    class="btn-cart btn btn-primary">+
                                    Cart</a>
                            </div>
                        </div>
                @endforeach

        </div>
    </div>

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
    @endsection
