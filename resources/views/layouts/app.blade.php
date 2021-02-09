<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tedbus Admin</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"  />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/stylecrm.css')}}">

    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @yield('content')
        </div>
        <script src="{{asset('assets/plugins/jQuery/jquery-1.12.4.min.js')}}" ></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" ></script>
    </body>
</html>
