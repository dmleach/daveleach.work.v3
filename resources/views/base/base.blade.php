<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/astral/assets/css/main.css" />
		<noscript>
            <link rel="stylesheet" href="css/astral/assets/css/noscript.css" />
        </noscript>

        <!-- Only show the dash in the title if a page title has been provided -->
        @hasSection('title')
            <title>{{ $siteName }} - @yield('title')</title>
        @else
            <title>{{ $siteName }}</title>
        @endif
    </head>
    <body>
        <div id="wrapper">
            <!-- Nav -->
            <nav id="nav">
                <a href="home" class="icon fa-home"><span>Home</span></a>
                <a href="projects" class="icon fa-folder"><span>Projects</span></a>
                <a href="contact" class="icon fa-envelope"><span>Contact</span></a>
                <a href="https://github.com/dmleach" class="icon fa-github"><span>Github</span></a>
                <a href="https://linkedin.com/in/dmleach" class="icon fa-linkedin"><span>LinkedIn</span></a>
            </nav>

            <div id="main">
                @section('content')
                    Base page content
                @show
            </div>
        </div>
    </body>
</html>
