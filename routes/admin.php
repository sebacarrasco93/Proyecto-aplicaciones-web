<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;

/**
 * Rutas de administración
 */

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/home', function () {
    dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth', 'verified']);

Route::resource('/users', UserController::class);

Route::resource('/formdata', HomeController::class);
