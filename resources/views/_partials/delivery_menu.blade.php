<div class="col-md-3" style="padding-top: 150px; margin-left:10px; padding-bottom: 200px; justify-content: center;  background-color:#1999D0; opacity: 0.81; border-radius: 8px; margin-bottom: 100px; margin-top: 30px">
    <h3 style="margin-left: 20px; margin-bottom: 50px">{{Auth::user()->type == 1 ? 'Kitchen Admin': 'Admin Portal'}}</h3>
    @if (Auth::user()->type == 2)
    <a href="{{route('kitchen')}}">
        <div class="@if(Route::currentRouteName() === 'user.book.delivery') active-delivery-menu-item @else delivery-menu-item @endif">
            <h6 class="delivery-menu-text">DASHBOARD</h6>
        </div>
    </a>

    <div class="delivery-menu-item">
        <a href="{{route('restaurants')}}">

            <h6 class="delivery-menu-text">MANAGE RESTAURANTS</h6>
        </a>
    </div>
    @endif

    @if (Auth::user()->type == 2)
    <a href="{{route('kitchen.users')}}">
        <div class="@if(Route::currentRouteName() === 'user.track.delivery') active-delivery-menu-item @else delivery-menu-item @endif">
            <h6 class="delivery-menu-text">MANAGE USERS</h6>
        </div>
    </a>
    <a href="#">

        <div class="@if(Route::currentRouteName() === 'user.book.customer_service') active-delivery-menu-item @else delivery-menu-item @endif">
            <h6 class="delivery-menu-text">CUSTOMERS</h6>
        </div>
    </a>
    @endif

    <!-- <a href="#">
        <div class="@if(Route::currentRouteName() === 'user.book.report_feedback') active-delivery-menu-item @else delivery-menu-item @endif">
            <h6 class="delivery-menu-text">WAITERS</h6>
        </div>
    </a> -->
    <!-- <div class="delivery-menu-item">
        <h6 class="delivery-menu-text">KITCHEN</h6>
    </div> -->
    <!-- <div class="delivery-menu-item">
        <h6 class="delivery-menu-text">CHARTS</h6>
    </div> -->
    <!-- <div class="delivery-menu-item">
        <h6 class="delivery-menu-text">TABLES</h6>
    </div> -->
    <div class="delivery-menu-item">
        <a href="{{route('kitchen.orders')}}">
            <h6 class="delivery-menu-text">ORDER</h6>
        </a>
    </div>
</div>
