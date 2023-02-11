<!DOCTYPE html>
<html>

<head>
    @include('layouts.links')
</head>

<body class="">
    <div class="row bg-blue padding-mobile">
        @yield('content')
    </div>
</body>
@include('layouts.script')

</html>
