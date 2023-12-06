<?php

use App\Http\Controllers\IndexCntroller;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexCntroller::class,'index'])->name('index');

Route::get('/welcome', [IndexCntroller::class, 'welcome'])->name('welcome');

Route::get('/home', [IndexCntroller::class, 'home'])->name('home');

Route::get('/galleries', [IndexCntroller::class, 'galleries'])->name('galleries')->middleware('auth');

Route::get('/shop', [IndexCntroller::class, 'shop'])->name('shop')->middleware('auth');


// register
Route::get('/register', [IndexCntroller::class, 'register'])->name('register');

Route::post('/register', [IndexCntroller::class, 'registerCommand'])->name('registerCommand');


Route::get('/login', [IndexCntroller::class, 'login'])->name('login');

Route::post('/login', [IndexCntroller::class, 'loginCommand'])->name('loginCommand');

Route::get('/logout', [IndexCntroller::class, 'logout'])->name('logout');
