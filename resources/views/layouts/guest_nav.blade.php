<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
</head>
<body>
    <div class="nav_outer">
        <p><a href="{{route('login')}}">ToDo App</a></p>
        <div class="nav_inner">
            <p><a href="{{route('login')}}">Login</a></p>
            <p>/</p>
            <p><a href="{{route('register')}}">Register</a></p>
        </div>
    </div>
</body>
</html>