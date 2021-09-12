<?php

use App\Models\Blog;
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

// ブログ一覧画面を表示
Route::get('/', [App\Http\Controllers\BlogController::class, 'showList'])->name('blogs');

// 新規ブログ登録画面を表示
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'showCreate'])->name('create');

// 新規ブログ登録
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'exeStore'])->name('store');

// 特定の記事へのリンク
Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'showDetail'])->name('show');
