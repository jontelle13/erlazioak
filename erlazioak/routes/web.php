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

Route::get('/gehituHelbideBista',[userController::class,'gehituHelbideBista']);


Route::get('/postBista',function(){
    $erabiltzaileak = Erabiltzailea::all();
        
    return view('layouts.postBista',['erabiltzaileak'=>$erabiltzaileak]);
});


 Route::get('/gehitu',[userController::class,'gehitu']);
 Route::post('/gehitu',[userController::class,'gehitu']);

 Route::get('/kendu/{id}',[userController::class,'kendu']);
 Route::post('/kendu/{id}',[userController::class,'kendu']);

 Route::get('/editatu/{id}',[userController::class,'editatu']);
 Route::post('/editatu/{id}',[userController::class,'editatu']);

 Route::get('/helbideAukera',[userController::class,'helbideAukera']);

 Route::post('/gehituHelbide',[userController::class,'gehituHelbide']);

 Route::get('/kenduHelbide/{id}',[userController::class,'kenduHelbide']);
 Route::post('/kenduHelbide/{id}',[userController::class,'kenduHelbide']);

 Route::get('/aukeratuErabiltzaile',[userController::class,'aukeratuErabiltzaile']);

Route::get('/postIgoBista',[userController::class,'postIgoBista']);

Route::get('/postIgo',[userController::class,'postIgo']);
Route::post('/postIgo',[userController::class,'postIgo']);

Route::get('/kenduPost/{id}',[userController::class,'kenduPost']);

Route::get('/editatuPost/{id}',[userController::class,'editatuPost']);

Route::post('/editatuta',[userController::class,'editatuta']);