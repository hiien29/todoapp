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

        <div class="container">
            <div class="row">
                <div class="col col-md-offset-3 col-md-6">
                    <nav class="panel panel-default">
                        <div class="panel-heading">タスクを編集する</div>
                        <div class="panel-body">
                            <form action="#
                            {{-- {{ route('tasks.edit', ['id' => $task->folder_id, 'task_id' => $task->id]) }} --}}
                            " method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="title">タイトル</label>
                                    @error('title')
                                    <p class="error_msg">{{$message}}</p>
                                    @enderror
                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') ?? $task->title }}" />
                                </div>
                                <div class="form-group">
                                    <label for="status">状態</label>
                                    <select name="status" id="status" class="form-control">
                                        @foreach(\App\Models\Task::STATUS as $key => $val)
                                        <option value="{{ $key }}" {{ $key == old('status', $task->status) ? 'selected' : '' }}>{{ $val['label'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="due_date">期限</label>
                                    @error('due_date')
                                    <p class="error_msg">{{$message}}</p>
                                    @enderror
                                    <input type="date" class="form-control" name="due_date" id="due_date" value="{{ old('date') ?? $task->due_date }}" />
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">送信</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </body>
</html>