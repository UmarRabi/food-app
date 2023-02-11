<!DOCTYPE html>
<html>

<head>
    @include('layouts.links')
</head>

<body style="height: 1000px">
    <div class="row bg-blue-color justify-content-center padding-mobile" style="height: auto !important;">
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
