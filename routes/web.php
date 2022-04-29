<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    // return view('welcome');
    return view('algo');
});

route::get('/faq', function () {
    return view('faq');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/home', HomeController::class);
Route::post('/home/formulario', HomeController::class . '@formulario')->name('formulario');
Route::post('/home/form_data', HomeController::class . '@form_data')->name('formulario.data');
Route::post('/home/form_users', HomeController::class . '@form_users')->name('formulario.users');
