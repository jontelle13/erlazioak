<?php

namespace App\Http\Controllers;

use App\Models\Erabiltzailea;
use App\Models\Helbidea;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function gehitu(Request $request)
{
    $request->validate([
        'izena' => 'required',
        'abizena' => 'required',
    ]);

    $erabiltzailea = Erabiltzailea::create([
        'izena' => $request->input('izena'),
        'abizena' => $request->input('abizena'),
        'helbidea' => $request->input('helbidea'),
    ]);

    return redirect('/gehitu');
}

public function kendu($id){
    $erabiltzailea= Erabiltzailea::find($id);
    if($erabiltzailea){
        $erabiltzailea->delete();
    }

    return redirect('/gehituBista');

}

public function editatu($id){
    $erabiltzailea = Erabiltzailea::find($id);

    return view('layouts.editatuBista', ['erabiltzailea' => $erabiltzailea]);
}

public function gehituHelbide(Request $request){
    $helbide = Helbidea::create([
        'helbidea' => $request->input('helbidea'),
    ]);
    return redirect('/gehituHelbideBista');
}

public function kenduHelbide($id){
    $helbide= Helbidea::find($id);
    if($helbide){
        $helbide->delete();
    }

    return redirect('/gehituHelbideBista');
}

public function aukeratuErabiltzaile(Request $request){
    
    $erabiltzailea=Erabiltzailea::find($request->input('erabiltzaile'));
    $helbideak=Helbidea::all();

    return view('layouts.esleitu',['helbideak'=>$helbideak,'erabiltzailea'=>$erabiltzailea]);
}

public function esleitu(Request $request){
    $helbideBerria=Helbidea::find($request->input('helbide'));
    $erabiltzailea=Erabiltzailea::find($request->input('erabiltzaile'));

    $erabiltzailea->helbidea=$helbideBerria->helbidea;
    $erabiltzailea->save();
    $helbideBerria->delete();
    return view('hasiera');
}
}