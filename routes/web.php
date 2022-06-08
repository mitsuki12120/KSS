<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KSSController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\UserController;

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

//ゲストメインページ
Route::get('/', function () {
    return view('welcome');
});


//会員メインページ
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard',[KSSController::class,'productList']
)->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/search',[KSSController::class,'searchList']
)->middleware(['auth'])->name('search');


//カート一覧

Route::get('/cart/aaa',[KSSController::class,'index']
)->middleware(['auth'])->name('cart');


Route::get('/cart/aaa?_token=Mn7F6z3xJDIAaQr6M81wXhNbWaCC117NIH2ydCIb&val1=1&val2=2&val3=3&val4=&val5=&val6=&val7=&val8=8', function () {
    return view('index.cartt');
})->middleware(['auth'])->name('cartt');



//お気に入り
Route::post('/favo',[FavoriteController::class,'update']);

Route::get('/favorite',[FavoriteController::class,'index']
)->middleware(['auth'])->name('favorite');


//注文完了
Route::get('/payment',[KSSController::class,'payment']
)->middleware(['auth'])->name('payment');


//マイページ
Route::get('/myPage',[UserController::class,'index']
)->middleware(['auth'])->name('myPage');


//編集
Route::get('/edit',[UserController::class,'edit']
)->middleware(['auth'])->name('edit');

//更新後
Route::post('/update',[UserController::class,'update']
)->middleware(['auth'])->name('update');

//カートから削除
Route::post('/delete',[KSSController::class,'delete']
)->middleware(['auth'])->name('delete');


// admin以下は管理者のみアクセス可
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:admin']], function () {
    Route::get('/', function () {
        return view('admin');
    });
});

Route::get('/admin',[UserController::class,'admin']
)->middleware(['auth', 'can:admin'])->name('admin');


require __DIR__.'/auth.php';


