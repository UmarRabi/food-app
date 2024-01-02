<!DOCTYPE html>
<html>

<head>
    @include('layouts.links')
</head>

<body style="bg-white">
    <div class="row justify-content-center">
        @if (session()->get('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
@include('layouts.script')

</html>
