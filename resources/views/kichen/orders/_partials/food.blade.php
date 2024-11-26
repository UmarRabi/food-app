<div class="d-flex mt-3">
    <div class="col-5">
        <div class="card">
            <div class="card-body" style="background:#dee2e6">
                <h3>{{ $order->transaction->order_type }}</h3>
                <span style="color: red">{{ $order->cart->food->name }}, </span>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                {{ $order->transaction->delivery_status }}
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card">
            <div class="card-body">
                <img style="width: 400px; height:70px;" src="{{ asset($order->cart->food->image) }}" alt="">
            </div>
        </div>
    </div>
</div>
