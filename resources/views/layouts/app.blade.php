<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
            <br>
            1111111
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>