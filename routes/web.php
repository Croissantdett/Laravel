<?php

use App\Models\Cat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});


Route::get('/home', function () {
<<<<<<< Updated upstream
    return view('home');

=======
     $username = 'Eloi';
     $password = '12345';
    return view('home', compact('username', 'password'));
});


Route::get('/bonjour/{username}', function ($username) {
    return view ('bonjour', compact('username'));
});

Route::get('/calcul/{c}/{e}', function ($c, $e) {
    $somme= $c + $e;
    return view ('calcul', compact('somme','c','e'));
});


Route::get('/cats/', function() {
    $cats=Cat::all();
    return view('index', compact('cats'));
});

Route::get('/cats/create', function() {
    return view('create');
});

Route::get('/cats/{id}', function($id) {
    $cat= Cat::find($id);
    return view('show', compact('cat'));
});


Route::get('/cats/create', function() {
    return view('create');
});

Route::post('/cats', function(){
    $validate = request()->validate([
    'name' => 'required',
    'price' => 'required',
    ]);

    $cat = new Cat();
    $cat->name = request('name');
    $cat->price = request('price');
    $cat->desc = request('desc');
    $cat->image = request('image');
    $cat->birth_date = request('birth_date');
    $cat->save();
    return redirect('/cats/'. $cat->id);
>>>>>>> Stashed changes
});
