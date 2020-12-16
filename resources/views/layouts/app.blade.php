<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <title>{{ isset($pageTitle) ?  $pageTitle . ' | ' . config('app.name') : config('app.name') }}</title>


    </head>
    <body class="antialiased">
        <main>
            @yield('content')
        </main>

        
    </body>
</html>
