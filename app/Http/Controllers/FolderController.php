<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    //
    public function showCreateForm()
    {
        return view('login.create_folder');
    }

    public function create(Request $request)
    {
        
        $request->validate([
            'folder' => 'required',
        ]);
    
        $folder = new Folder();
        $folder->user_id = Auth::id(); // ログインユーザーのIDを指定
        $folder->title = $request->folder;
        $folder->save();
    
        // 他の処理
    
        return redirect()->route('index', [
            'id' => $folder->id,
        ]);


        
    }
}

// dd($request->folder);
        // return redirect()->route('index', [
        //     'id' => $folder->id,
        // ]);

        // フォルダモデルのインスタンスを作成する
        // $folder = new Folder;