<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\ShopController;
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
//     return view('welcom');
// });

// お店一覧（ログイン不要）
Route::get('/', [ShopController::class, 'index'])->name('shops.index');

// お店詳細（ログイン不要）
Route::get('/shops/{shop}', [ShopController::class, 'show'])->name('shops.show');

// // 認証が必要な機能（お気に入り登録・予約など）はここに追加
// Route::middleware('auth')->group(function () {
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::middleware('auth')->group(function () {
//     Route::get('/', [AuthController::class, 'index']);
});


// Route::get('/', [ShopController::class, 'index'])->name('shops.index');
// Route::get('/shops/{shop}', [ShopController::class, 'show'])->name('shops.show');

// Route::get('/', [ShopController::class, 'index'])->name('shops.index');