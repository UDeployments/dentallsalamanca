<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Authentication\AuthenticationController;

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

Route::view('/', 'home');

Route::get('/login', [AuthenticationController::class, 'index'])->name('Auth.index');
Route::get('/register', [AuthenticationController::class, 'create'])->name('Auth.create');
Route::post('/register', [AuthenticationController::class, 'store'])->name('Auth.store');

Route::get('/redirect', [SocialController::class, 'redirect'])->name('redirect');
Route::get('/callback', [SocialController::class, 'callback'])->name('callback');
