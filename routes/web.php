<?php

use App\Central\Controllers\Auth\LoginController;
use App\Central\Controllers\Auth\LogoutController;
use App\Central\Controllers\Auth\RegistrationController;
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

Route::redirect('/', '/login');
Route::view('/login', 'central.auth.login')->name('auth.login');
Route::post('/login', LoginController::class)->name('auth.login');
Route::view('/register', 'central.auth.register')->name('auth.register');
Route::post('/register', RegistrationController::class)->name('auth.register');
Route::post('/logout', LogoutController::class)->name('auth.logout');
Route::view('/applications', 'central.apps.application-list')->name('applications.index');

Route::view('/dashboard', 'central.dashboard')->name('dashboard');
