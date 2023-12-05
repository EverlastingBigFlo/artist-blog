<?php

use App\Http\Controllers\IndexCntroller;
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

Route::get('/home', [IndexCntroller::class, 'home'])->name('home');

Route::get('/galleries', [IndexCntroller::class, 'galleries'])->name('galleries');

Route::get('/shop', [IndexCntroller::class, 'shop'])->name('shop');


// register
Route::get('/register', [IndexCntroller::class, 'register'])->name('register');

Route::post('/register', [IndexCntroller::class, 'registerCommand'])->name('registerCommand');


Route::get('/login', [IndexCntroller::class, 'login'])->name('login');

Route::post('/login', [IndexCntroller::class, 'loginCommand'])->name('loginCommand');