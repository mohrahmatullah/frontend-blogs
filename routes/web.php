<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

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
    return view('welcome');
});

Route::get('dashboard', [HomeController::class, 'index'])->name('home');

// Route::get('/', [ListController::class, 'index'])->name('home');
// Route::get('add', [ListController::class, 'add'])->name('add');
// Route::post('create', [ListController::class, 'create'])->name('create');
// Route::get('view/{id}', [ListController::class, 'view'])->name('view');
// Route::get('lihat/{id}', [ListController::class, 'lihat'])->name('lihat');
// Route::post('update', [ListController::class, 'update'])->name('update');

Route::get('auth', [AuthController::class, 'index'])->name('get-auth');
Route::post('auth', [AuthController::class, 'auth'])->name('post-auth');

Route::get('post', [PostController::class, 'index'])->name('post');

// Route::get('logout', [ListController::class, 'logout'])->name('logout');

// Route::get('split', [ListController::class, 'getSplit']);