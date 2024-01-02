<div style="height:400px; background-image: url('/images/header_photo.png'); background-size: cover;">
    <div style="height:400px; padding-top: 100px; padding-bottom: 100px; background-color: rgba(25, 153, 208, 0.8); z-index: 2;">
        <div class="container">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <div class="" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                    <a href="{{ route('dashboard') }}" style="margin-right: 10px;">
                        <i class="fa-solid fa-home fa-3x" style="color: white"></i>
                    </a>
                    <input type="image" src="{{asset('images/logout.png')}}" width="50" height="50" />
                </div>

                <h4 style="margin-top: 20px; font-size:40px; text-align: center; color: white; font-weight: bold">Menu</h4>
            </form>
        </div>
    </div>
</div>