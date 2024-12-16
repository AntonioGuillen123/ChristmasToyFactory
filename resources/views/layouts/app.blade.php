<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Christmas Toy Factory')</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
        <x-header />

        <main  class="bg-[#272b33] md: h-[24.3rem] lg: h-screen xl: h-screen 2xl: h-screen">
            @yield('content')
        </main>

        <x-footer />
</body>
</html>