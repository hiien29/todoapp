<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ToDo App</title>
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/guest.css') }}"> --}}
    </head>
    <body>
    {{-- <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">ToDo App</a>
        </nav>
    </header> --}}
    @include('layouts.login_nav')

        <main>
            <div class="container">
                <div class="row">
                    <div class="col col-md-offset-3 col-md-6">
                        <nav class="panel panel-default">
                            <div class="panel-heading">まずはフォルダを作成しましょう</div>
                            <div class="panel-body">
                                <div class="text-center">
                                    <a href="{{ route('folders.create') }}" class="btn btn-primary">フォルダ作成ページへ</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </body>
    </html>