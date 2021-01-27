<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>UI elements - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    </head>
    <body>
        <header>
            <h1>@yield('title')</h1>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            &#xA9; Copyright Week-05, 2020 Pachara's UI elements.
        </footer>
    </body>
</html>
