<?php

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

//laravelスタート画面を表示
Route::get('/', function () {
    return view('welcome');
});

//laravelスタート画面のルート
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ↑users/auth users.authに書き換え予定


//認証機能全てのルート
// Auth::routes();

//ログイン画面のログインボタンを押下後、top画面に遷移する
Route::post('/top', [App\Http\Controllers\LoginController::class, 'login'])->name('top');
//ログイン画面を表示させるルート
Route::get('/login',[App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

//urlがtopになった時にトップ画面へ遷移
Route::get('/top', function () {
    return view('top.top');
})->name('top');


//ログイン画面をトップページに表示
Route::get('/', function () {
    return redirect('/login');
});

//新規登録画面のルート
Route::get('Auth/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('Auth/register',[App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');


//新規登録画面を表示
Route::get('/register', function () {
    return view('Auth.register');
});


//プロフィール編集画面のルート
Route::get('profiles/edit', [App\Http\Controllers\Auth\EditController::class, 'edit'])->name('profiles.edit');





