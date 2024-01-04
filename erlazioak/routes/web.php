<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Models\Erabiltzailea;

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

Route::get('/gehituBista',function(){
    $erabiltzaileak = Erabiltzailea::all();
    
    return view('layouts.gehitu',['erabiltzaileak'=>$erabiltzaileak]);
});
Route::get('/listaBista',function(){
    $erabiltzaileak = Erabiltzailea::all();
        
    return view('layouts.lista',['erabiltzaileak'=>$erabiltzaileak]);
});
 Route::get('/gehitu',[userController::class,'gehitu']);
 Route::post('/gehitu',[userController::class,'gehitu']);

 Route::get('/kendu/{id}',[userController::class,'kendu']);

