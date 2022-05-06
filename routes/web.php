<?php

use App\Http\Controllers\PostController;
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

$index = (new PostController())->index();


$var = Route::post('posts/search',     [PostController::class,'search'])->name('posts.search');
Route::get('/posts/create',     [PostController::class,'create'])->name('posts.create');
Route::get('/posts',            $index )->name('posts.index');

Route::post('/posts',           [PostController::class,'store'])->name('posts.store');

Route::get('/posts/edit/{id}',  [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/{id}',       [PostController::class,'show'])->name('posts.show');
Route::delete('/posts/{id}',    [PostController::class,'destroy'])->name('posts.destroy');
Route::put('/posts/{id}',       [PostController::class, 'put'])->name('posts.put');

Route::get('/', function () {
    return view('welcome');
});
