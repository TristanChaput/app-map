<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ isset($pageTitle) ?  $pageTitle . ' | ' . config('app.name') : config('app.name') }}</title>
        
        @yield('head')

    </head>
    <body class="antialiased">
        
        @yield('content')
                
    </body>
</html>
