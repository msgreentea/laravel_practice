<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumerController;

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

// トップページ
Route::get('/', [ConsumerController::class, 'index'])->name('home');
// 入力
Route::post('/register', [ConsumerController::class, 'register']);
// お問い合わせ完了ページ
Route::get('/', [controller::class, 'show']);