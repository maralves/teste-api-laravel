<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [UserController::class, 'index'])->name('users.list');
Route::get('/users/new', [UserController::class, 'new'])->name('users.new');
Route::post('/users', [UserController::class, 'store'])->name('users.create');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete');

Route::get('/posts', [PostController::class, 'index'])->name('posts.list');
Route::get('/posts/new', [PostController::class, 'new'])->name('posts.new');
Route::post('/posts', [PostController::class, 'store'])->name('posts.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.delete');

Route::get('/coments', [ComentController::class, 'index'])->name('coments.list');
Route::get('/coments/new', [ComentController::class, 'new'])->name('coments.new');
Route::post('/coments', [ComentController::class, 'store'])->name('coments.create');
Route::get('/coments/{id}', [ComentController::class, 'show'])->name('coments.show');
Route::get('/coments/edit/{id}', [ComentController::class, 'edit'])->name('coments.edit');
Route::put('/coments/{id}', [ComentController::class, 'update'])->name('coments.update');
Route::delete('/coments/{id}', [ComentController::class, 'destroy'])->name('coments.delete');
