<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Models\Erabiltzailea;
use App\Models\Helbidea;


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

Route::get('/gehituHelbideBista',function(){
    $helbideak = Helbidea::all();
        
    return view('layouts.helbideGehitu',['helbideak'=>$helbideak]);
});
Route::get('/esleituHelbideaBista',function(){
    $erabiltzaileak = Erabiltzailea::all();
    $helbideak = Helbidea::all();
        
    return view('layouts.esleituHelbidea',['helbideak'=>$helbideak,'erabiltzaileak'=>$erabiltzaileak]);
});

 Route::get('/gehitu',[userController::class,'gehitu']);
 Route::post('/gehitu',[userController::class,'gehitu']);

 Route::get('/kendu/{id}',[userController::class,'kendu']);
 Route::post('/kendu/{id}',[userController::class,'kendu']);

 Route::get('/editatu/{id}',[userController::class,'editatu']);
 Route::post('/editatu/{id}',[userController::class,'editatu']);

 Route::get('/gehituHelbide',[userController::class,'gehituHelbide']);
 Route::post('/gehituHelbide',[userController::class,'gehituHelbide']);

 Route::get('/kenduHelbide/{id}',[userController::class,'kenduHelbide']);
 Route::post('/kenduHelbide/{id}',[userController::class,'kenduHelbide']);

 Route::get('/aukeratuErabiltzaile',[userController::class,'aukeratuErabiltzaile']);