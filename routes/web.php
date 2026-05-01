<?php

use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FalkutasController;
use App\Http\Controllers\PeriodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/' , function () {
    return view ('welcome');
});

Route::get('/tentang' , function () {
    return view ('tentang');
});

Route::resource('/falkutas',FalkutasController::class);
Route::resource('/periode',PeriodeController::class);
Route::resource('/prodi',ProdiController::class);