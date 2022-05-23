<?php

use Illuminate\Support\Facades\Route;

/**
 * Rutas de administración
 */

Route::get('/', function () {
    return view('admin.index');
});

Route::resource('/users', UserController::class);

Route::resource('/formdata', HomeController::class);
