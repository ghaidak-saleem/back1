<?php

use App\Http\Controllers\PostController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

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

Route::get('/',[PostController::class,'index'])->name('post.index');
Route::get('posts/create',[PostController::class,'Create'])->name('post.create');
Route::post('posts/store',[PostController::class,'store'])->name('post.store');
Route::get('posts/{post}/edit', [PostController::class,'edit'])->name('post.edit');
Route::put('posts/{post}',[PostController::class,'update'])->name('post.update');
Route::get('posts/{post}/show',[PostController::class,'show'])->name('post.show');
Route::delete('posts/{post}',[PostController::class,'destroy'])->name('post.delete');

?>
