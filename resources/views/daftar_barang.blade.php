<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>@yield('header')</h1>
        <h3>@yield('subheader')</h3>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>