

<html>
<html>
    <head>
        <title>MA Concept</title>
        <link rel="stylesheet" href="{{asset('/css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap-reboot.min.css')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
    @if (\Request::is('data-protection'))
        @include('Layouts/Header_black')
    @elseif(\Request::is('imprint'))
        @include('Layouts/Header_black')
    @else
        @include('Layouts/Header')
    @endif
        @yield('content')
        @include('Layouts/Footer')
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>
    <script src="{{asset('/js/script.js')}}"></script>

</html>
