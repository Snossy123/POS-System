<?php

use App\Http\Controllers\auth\login;
use App\Http\Controllers\auth\signup;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/signup', function () {
    return view('auth\singup');
})->name('signup');

Route::post('/createAccount', [signup::class, 'create'])->name('createAccount');

Route::get('/login', function () {
    return view('auth\login');
})->name('login');

Route::post('/loginAccount', [login::class, 'index'])->name('loginAccount');


