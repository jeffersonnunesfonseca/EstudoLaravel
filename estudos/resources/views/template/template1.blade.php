<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
</head>
<body>
    <!-- yield, meio de deixar uma view dinamica -->
    @yield('content')
    @stack('scripts')
</body>
</html>