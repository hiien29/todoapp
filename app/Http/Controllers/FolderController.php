<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class FolderController extends Controller
{
    //
    public function showCreateForm()
    {
        return view('login.create_folder');
    }

    public function create(Request $request)
{
    // フォルダモデルのインスタンスを作成する
    $folder = new Folder();
    $request->validate([
        'folder' => 'required',
    ]);
    // タイトルに入力値を代入する
    $folder->title = $request->title;
    // インスタンスの状態をデータベースに書き込む
    $folder->save();

    // dd($request->id);

    return redirect()->route('index', [
        'id' => $folder->id,
    ]);
}
}
