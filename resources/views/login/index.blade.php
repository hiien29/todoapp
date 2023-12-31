{{-- @include('layouts.guest_nav') --}}

{{-- @include('layouts.folder') --}}

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
                    <div class="col col-md-4">
                        <nav class="panel panel-default">
                            <div class="panel-heading">フォルダ</div>
                            <div class="panel-body">
                                <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">フォルダを追加する</a>
                            </div>
                            <div class="list-group">
                                @foreach($folders as $folder)
                                <a href="{{ route('index', ['id' => $folder->id]) }}" class="list-group-item {{ $id === $folder->id ? 'active' : '' }}" >{{ $folder->title }}</a>
                                @endforeach
                            </div>
                        </nav>
                    </div>

                    <div class="column col-md-8">
                    <!-- ここにタスクが表示される -->
                        <div class="panel panel-default">
                            <div class="panel-heading">タスク</div>
                            <div class="panel-body">
                                <div class="text-right">
                                    <a href="{{ route('tasks.create', ['id' => $id]) }}" class="btn btn-default btn-block">タスクを追加する</a>
                                </div>
                            </div>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>タイトル</th>
                                        <th>状態</th>
                                        <th>期限</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ $task->title }}</td>
                                        <td>
                                            <span class="label {{ $task->status_class }}">{{ $task->status_label }}</span>
                                        </td>
                                        <td>{{ $task->formatted_due_date }}</td>
                                        <td><a href="{{ route('tasks.edit', ['id' => $task->folder_id, 'task_id' => $task->id]) }}">編集</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>