{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">
</head>
<body> --}}
    <div class="nav__outer">
        <p><a href="{{route('login')}}">ToDo App</a></p>
        <div class="nav__inner">
            <p><a href="#">
                こんにちは、<?php $user = Auth::user(); ?>{{ $user->name }}さん
            </a></p>
            <p>/</p>
            <p><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a></p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
{{-- </body>
</html> --}}

