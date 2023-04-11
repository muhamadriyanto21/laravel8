<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Models\Todo;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// get akan ter expos ke url
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

// kalau post nggak akan kelihatan datanya

Route::post('/login', [LoginController::class, 'checkLogin'])->name('action-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('action-logout');
Route::post('/register/store', [RegisterController::class, 'store'])->name('store');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/todos/create', [TodoController::class, 'create'])->name('tambah-todo')->middleware('auth');