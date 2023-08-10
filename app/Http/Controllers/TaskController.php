<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function show(int $id){

        $folders = Folder::all();
        $current_folder = Folder::find($id);
        $tasks = $current_folder->tasks()->get();
        
        return view('login.index',compact('folders','id','tasks'));
    }

    public function showCreateForm(int $id) {
        return view('login.create_task', [
            'folder_id' => $id
        ]);
    }

    public function create(int $id,  Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'due_date' => 'required',
        ]);

        $current_folder = Folder::find($id);

        $task = new Task();
        $task->title = $request->title;
        $task->due_date = $request->due_date;

        $current_folder->tasks()->save($task);

        return redirect()->route('index', [
            'id' => $current_folder->id,
        ]);
    }

    public function showEditForm(int $id, int $task_id) {
        
        $task = Task::find($task_id);
        // dd($task_id);

        return view('login.task_edit',compact('task'));
    }

    public function edit(int $id, int $task_id, Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'due_date' => 'required',
        ]);
        // 1
        $task = Task::find($task_id);

        // 2
        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->save();

        // 3
        return redirect()->route('index', [
            'id' => $task->folder_id,
        ]);
    }
}


