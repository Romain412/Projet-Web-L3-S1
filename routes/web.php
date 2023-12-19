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


Route::get('/', function() {
    return view('accueil');
});

Route::get('/classement', function() {
    return view('classement');
});

Route::get('/connexion', function() {
    return view('connexion');
});

Route::get('/inscription', function() {
    return view('inscription');
});

Route::get('/joueurs', function(){
    return view('joueurs');
});

Route::get('/1/{id?}', function($id = null){
    return 'test : '.$id;
})->where('id','[0-9]+');
