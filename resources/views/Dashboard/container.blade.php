<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tedbus Admin</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"  />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/lobipanel/lobipanel.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/pace/flash.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/themify-icons/themify-icons.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/emojionearea/emojionearea.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/stylecrm.css')}}">

    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('Dashboard.header')
            @include('Dashboard.sidebar')
            @yield('content')
        </div>
        <script src="{{asset('assets/plugins/jQuery/jquery-1.12.4.min.js')}}" ></script>
        <script src="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" ></script>
        <script src="{{asset('assets/plugins/lobipanel/lobipanel.min.js')}}"></script>
        <script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>
        <script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/plugins/fastclick/fastclick.min.js')}}"></script>
        <script src="{{asset('assets/dist/js/custom.js')}}"></script>
    </body>
</html>
