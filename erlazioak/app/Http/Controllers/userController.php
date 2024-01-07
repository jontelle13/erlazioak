<?php

namespace App\Http\Controllers;

use App\Models\Erabiltzailea;
use App\Models\Helbidea;
use App\Models\Post;
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
        'adina' => $request->input('adina'),
        'email' => $request->input('email'),
        'jaiotze_data' => $request->input('jaiotze_data'),
        'generoa' => $request->input('generoa'),


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

public function gehituHelbideBista(Request $request){
    $erabiltzailea=Erabiltzailea::find($request->input('erabiltzailea'));
    $helbideak = Helbidea::all();
        
    return view('layouts.helbideGehitu',['helbideak'=>$helbideak,'erabiltzailea'=>$erabiltzailea]);
}

public function helbideAukera(){
    $erabiltzaileak=Erabiltzailea::all();
    return view('layouts.helbideAukeratuBista',['erabiltzaileak'=>$erabiltzaileak]);
}

public function gehituHelbide(Request $request){
    $existingHelbide = Helbidea::where('erabiltzailea_id', $request->input('erabiltzailea'))->first();

    if ($existingHelbide) {
        $existingHelbide->delete();
    }

    $helbide = Helbidea::create([
        'helbidea' => $request->input('helbidea'),
        'erabiltzailea_id' => $request->input('erabiltzailea')
    ]);

    return redirect('/helbideAukera');
}


public function kenduHelbide($id){
    $helbide= Helbidea::find($id);
    if($helbide){
        $helbide->delete();
    }

    return redirect('/helbideAukera');
}

public function aukeratuErabiltzaile(Request $request){
    
    $erabiltzailea=Erabiltzailea::find($request->input('erabiltzaile'));
    $helbideak=Helbidea::all();

    return view('layouts.esleitu',['helbideak'=>$helbideak,'erabiltzailea'=>$erabiltzailea]);
}


public function postIgoBista(Request $request){
    $erabiltzailea=Erabiltzailea::find($request->input('erabiltzailea'));
    $postak=Post::all();

    return view('layouts.postIgoBista',['erabiltzailea'=>$erabiltzailea,'postak'=>$postak]);
}

public function postIgo(Request $request){

    $post = Post::create([
        'post' => $request->input('post'),
        'erabiltzailea_id' => $request->input('erabiltzailea')
    ]);

    return redirect('/postBista');
}

public function kenduPost($id){
    $post=Post::find($id);
    if($post){
        $post->delete();
    }
    return redirect('/postBista');
}

public function editatuPost($id){
    $post=Post::find($id);
    
    return view('layouts.postEditatu',['post'=>$post]);
}
public function editatuta(Request $request){
    $post=Post::find($request->input('postId'));
    $post->post=$request->input('post');
    $post->save();
    return redirect('/postBista');
}
}