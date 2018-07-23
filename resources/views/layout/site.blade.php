<!DOCTYPE html>
<html lang="ru">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <link rel="stylesheet" href="{{ asset('lib/node_modules/bootstrap3/dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/node_modules/@fortawesome/fontawesome-free/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/node_modules/admin-lte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/node_modules/admin-lte/dist/css/skins/skin-purple.css') }}">

    </head>

    <body class="hold-transition skin-purple sidebar-mini layout-top-nav" >
        <div>

            @yield('menu')
            @guest
                @yield('regForm')
            @endguest
            @yield('blog')
            @yield('profile')

        </div>
        <script src="{{ asset('lib/node_modules/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/node_modules/bootstrap3/dist/js/bootstrap.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>
        <script src="{{ asset('lib/node_modules/admin-lte/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('lib/node_modules/admin-lte/dist/js/demo.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/toggleTooltip.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/nameUploadAvatar.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/like.js') }}"></script>

    </body>

</html>