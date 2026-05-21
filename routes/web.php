<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
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

Route::resource('fakultas',FakultasController::class)->parameters([
    'fakultas' => 'fakultas'
]);

Route::resource('/fakultas',FakultasController::class);
Route::resource('/periode',PeriodeController::class);
Route::resource('/prodi',ProdiController::class);