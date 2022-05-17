<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('form');
});

route::get('/faq', function () {
    return view('faq');
});

Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::resource('/form', HomeController::class);
Route::post('/form/formulario', HomeController::class . '@formulario')->name('formulario');
Route::post('/form/form_data', HomeController::class . '@form_data')->name('formulario.data');
Route::post('/form/form_users', HomeController::class . '@form_users')->name('formulario.users');
