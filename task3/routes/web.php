<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\Delete;

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
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});


Route::POST('/logg', [LoginController::class,'login12']);
Route::POST('/reggg', [RegistController::class,'indexs']);


Route::get('/wel', function () {
    return view('wel');
});
Route::get('/delete', [Delete::class,'delete']);
