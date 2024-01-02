<div id="bookDeliveryDiv" style="width: 100%; display:flex; justify-content: flex-end; flex-direction: row;">
    <div style="flex-direction: column; display:flex; text-align: center; align-items: center;">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <i class="fa-solid fa-user fa-4x" style="color: #1999D0; text-align: center; margin-bottom: 5px"></i>
            <p>Welcome {{auth()->user()->firstname}} {{auth()->user()->lastname}} <br>
                <button type="submit"> Logout</button>
            </p>
        </form>
    </div>
</div>