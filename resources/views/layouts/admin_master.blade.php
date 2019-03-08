<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- Fonts --> <!-- font-family: 'Nunito', sans-serif; -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="/admin/css/style.css">
        <link rel="stylesheet" href="/admin/css/menu/top_menu.css">
        <link rel="stylesheet" href="/admin/css/menu/left_menu.css">
        @yield('other_css_links')


        <!-- scripts -->
        <script src="/admin/js/menu/menu.js"></script>
        @yield('other_js_links')
    </head>
    <body>
        <!-- menu includes -->
        @include('admin.menu.top_menu')
        @include('admin.menu.left_menu')
        <div id="content">
            <div class="section_header">
                <div class="section_h_img">
                    <i class="fas @yield('header_icon')"></i>
                </div>
                <div class="section_h_value">
                    <h2> @yield('header_title')</h2>
                    <p> @yield('header_short')</p>
                </div>
                <div class="section_h_path">
                    <div class="home_img">
                        <i class="fas fa-home"></i>
                    </div>
                    <p>@yield('path')</p>
                </div>
            </div>
            <div class="section_body">
                @yield('content')
            </div>
        </div>
    </body>
</html>
