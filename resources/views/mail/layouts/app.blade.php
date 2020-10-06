<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style media="screen">

      body {

        display: flex;
        flex-direction: column;
        align-items: center;

        height: 100vh;
        width: 100%;
        
        background-color: lightgreen;

      }

    </style>

</head>

<body>

  <div id="app">

    <main class="py-4">
        @yield('content')
    </main>

  </div>

</body>
</html>
