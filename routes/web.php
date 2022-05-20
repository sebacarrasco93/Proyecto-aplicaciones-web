<?php

use Illuminate\Support\Facades\Route;
#use HomeController;
use Admin\UserController;

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

// Rutas para el Formulario
Route::resource('/form', HomeController::class);
Route::post('/form/formulario', HomeController::class . '@formulario')->name('formulario');

// Rutas para el administrador
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', function () {
        return view('admin.index');
    })->middleware(['auth', 'verified']);
    Route::resource('/users', UserController::class)->middleware(['auth', 'verified']);
    Route::resource('/formdata', HomeController::class)->middleware(['auth', 'verified']);
});
