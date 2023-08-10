<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('guest.login');
})->name('login');

Route::get('/register', function () {
    return view('guest.register');
})->name('register');

Route::get('/forget', function () {
    return view('guest.forget_pass');
})->name('forget');

// Route::get('/login', function () {
//     return view('login.toppage');
// })->name('top');

Route::controller(TaskController::class)->group(function()
{
    Route::get('/index/{id}','show')->name('index');
    Route::get('/folders/{id}/create', 'showCreateForm')->name('tasks.create');
    Route::post('/folders/{id}/create', 'create');
    Route::get('/folders/{id}/tasks/{task_id}/edit', 'showEditForm')->name('tasks.edit');
    Route::post('/folders/{id}/tasks/{task_id}/edit', 'edit');
});

Route::controller(FolderController::class)->group(function()
{
    Route::get('/folders/create', 'showCreateForm')->name('folders.create');
    Route::post('/folders/create', 'create');
});

