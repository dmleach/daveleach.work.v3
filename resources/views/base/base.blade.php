<html>
    <head>
        <!-- Only show the dash in the title if a page title has been provided -->
        @hasSection('title')
            <title>{{ $siteName }} - @yield('title')</title>
        @else
            <title>{{ $siteName }}</title>
        @endif
    </head>
    <body>
        @section('menu')
            Main menu
        @show

        @section('content')
            Base page content
        @show
    </body>
</html>
