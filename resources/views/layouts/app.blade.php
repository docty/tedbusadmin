<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tedbus Admin</title>
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="jquerycustom.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css2/all.css">

    </head>
    <body>

                @yield('content')


        <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>
        <script src="jquery.customjquery.js" charset="utf-8"></script>
        <script src="jquerymain.js" charset="utf-8"></script>
    </body>
</html>
