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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('dashboard', [HomeController::class, 'index'])->name('home');

// Route::get('/', [ListController::class, 'index'])->name('home');
// Route::get('add', [ListController::class, 'add'])->name('add');
// Route::post('create', [ListController::class, 'create'])->name('create');
// Route::get('view/{id}', [ListController::class, 'view'])->name('view');
// Route::get('lihat/{id}', [ListController::class, 'lihat'])->name('lihat');
// Route::post('update', [ListController::class, 'update'])->name('update');

Route::get('auth', [AuthController::class, 'index'])->name('get-auth');
Route::post('auth', [AuthController::class, 'auth'])->name('post-auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('sign-up', [AuthController::class, 'register'])->name('get-register');
Route::post('sign-up', [AuthController::class, 'saveRegister'])->name('post-register');

Route::get('error-404', [AuthController::class, 'error404'])->name('error-404');

Route::get('post', [PostController::class, 'index'])->name('post');
Route::get('create-post', [PostController::class, 'create'])->name('create-post');
Route::post('create-post', [PostController::class, 'store'])->name('save-post');
Route::get('edit-post/{id}', [PostController::class, 'edit'])->name('edit-post');
Route::post('edit-post/{id}', [PostController::class, 'update'])->name('edit-post');
Route::get('delete-post/{id}', [PostController::class, 'delete'])->name('delete-post');

Route::get('category', [CategoryController::class, 'index'])->name('category');
Route::get('create-category', [CategoryController::class, 'create'])->name('create-category');
Route::post('create-category', [CategoryController::class, 'store'])->name('save-category');
Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('edit-category');
Route::post('edit-category/{id}', [CategoryController::class, 'update'])->name('edit-category');
Route::get('delete-category/{id}', [CategoryController::class, 'delete'])->name('delete-category');

Route::get('tag', [TagController::class, 'index'])->name('tag');
Route::get('create-tag', [TagController::class, 'create'])->name('create-tag');
Route::post('create-tag', [TagController::class, 'store'])->name('save-tag');
Route::get('edit-tag/{id}', [TagController::class, 'edit'])->name('edit-tag');
Route::post('edit-tag/{id}', [TagController::class, 'update'])->name('edit-tag');
Route::get('delete-tag/{id}', [TagController::class, 'delete'])->name('delete-tag');

Route::get('profile', [AuthController::class, 'profile'])->name('profile');


Route::get('/', [HomeController::class, 'post'])->name('/');
Route::get('/{id}', [HomeController::class, 'post'])->name('post-category');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('post-detail');



// Route::get('split', [ListController::class, 'getSplit']);