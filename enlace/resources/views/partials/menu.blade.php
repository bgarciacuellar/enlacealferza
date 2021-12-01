<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enlace</title>
</head>

<body>
    <nav>
        <ul>
            <a href="{{ route('home') }}">
                <li>Inicio</li>
            </a>
            <a href="{{ route('users.userList') }}">
                <li>Lista de trabajadores</li>
            </a>
        </ul>
    </nav>
    @yield('content')
</body>

</html>