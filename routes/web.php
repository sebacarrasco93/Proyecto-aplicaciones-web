<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

route::get('/login', function () {
    return view('login');
});
//logout lavarel V8
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login');
});

Route::resource('/home', HomeController::class);
Route::post('/home/formulario', HomeController::class.'@formulario')->name('formulario');