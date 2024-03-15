<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
</head>

<body>

    @include('navbar')

    <div style="padding-top: 45px">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

</body>

</html>
