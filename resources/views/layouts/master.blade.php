<html lang="bs">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts --> <!-- font-family: 'Nunito', sans-serif; -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- all css files -->
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" href="/css/menu/menu.css">
        <link rel="stylesheet" type="text/css" href="/css/menu/left_menu.css">
        @yield('other_css_links')
        <!-- footer css -->
        <link rel="stylesheet" href="/css/footer/footer.css">

        <!-- all javascript files -->
        <script type="text/javascript" src="/js/menu/menu.js"></script>
        @yield('other_js_links')
    </head>
    <body>
        <!-- menu includes -->
        @include('includes.parts.menu.top_menu')
        @include('includes.parts.menu.left_menu')
        <div id="content">
            @yield('content')
        </div>
        @include('includes.parts.footer.footer')
    </body>
</html>
