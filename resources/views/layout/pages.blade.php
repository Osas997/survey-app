<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('dashboard.partials.link')
    <title>@yield('title')</title>
</head>
<body>
    <main class="relative h-full ">
        @yield('content')
    </main>
</body>
</html>