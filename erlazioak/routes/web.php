<?php

use Illuminate\Support\Facades\Route;

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
    return view('hasiera');
});
Route::get('/gehitu', function () {
    return view('layouts.gehitu');
});
Route::post('/gehitu', function () {
    return view('layouts.gehitu');
});
