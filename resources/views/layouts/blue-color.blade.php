<!DOCTYPE html>
<html>

<head>
    @include('layouts.links')
</head>

<body>
    <div class="row bg-blue-color justify-content-center" style="min-height: 100vh;">
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
