<!DOCTYPE html>
<html>

<head>
    @include('layouts.links')
</head>

<body style="height:100vh;">
    <div class="row justify-content-center">
        @if (session()->get('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
    {{-- <div class="row"> --}}
        @yield('content')
    {{-- </div> --}}
</body>
@include('layouts.script')

</html>
