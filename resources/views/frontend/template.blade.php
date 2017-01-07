<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', '') | {{ trans('system.app_name') }}</title>
    <link href="{{asset('css/instant.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="https://www.instantprint.co.uk/Content/images/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,400italic,500,500italic,700' rel='stylesheet'
          type='text/css'>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body>

    {{--HEADER--}}
    @include('frontend/header')

    {{--CONTENT--}}
    <div id="sitewrapper">
        @yield('content')
    </div>

    {{--FOOTER--}}
    @include('frontend/footer')

</body>

</html>