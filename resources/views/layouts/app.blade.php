<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href={{ asset('assets/css/normalize.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/all.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }} />
</head>

<body>
    @yield('content')
   <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
