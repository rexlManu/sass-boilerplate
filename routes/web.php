<?php

use App\Http\Controllers\Central\Auth\LoginController;
use App\Http\Controllers\Central\Auth\RegistrationController;
use App\Models\Tenant;
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

Route::view('/dashboard', 'central.dashboard')->name('dashboard');

Route::get('test', function () {
    $tenant = Tenant::create();
    $tenant->domains()->create([
        'domain' => 'ram.localhost',
    ]);
    dd($tenant);
});
