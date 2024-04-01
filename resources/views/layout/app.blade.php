<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    {{-- <link href="css/input.css" rel="stylesheet"> --}}

    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper">
        @yield('content')
        <p class="text-blue-700">blue</p>
    </div>
</body>

</html>
