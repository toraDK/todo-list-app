<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\WorkspaceController;
use App\Models\Workspace;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'title' => 'home'
    ]);
});

Route::get('/login', function () {
    return view('login.index',[
        'title' => 'login'
    ]);
});

Route::get('/register', function () {
    return view('register.index', [
        'title' => 'register'
    ]);
});

Route::resource('/board', BoardController::class);

Route::get('/workspace/{name:workspace_name}',[ WorkspaceController::class, 'show']);
Route::get('/workspace/{workspace:workspace_id}/toDoList/{toDoList:table_name}',[ WorkspaceController::class, 'showTable']);