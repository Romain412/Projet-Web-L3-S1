<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
})->name('accueil');

Route::get('/classement', function() {
    return view('classement');
})->name('classement');

Route::get('/connexion', function() {
    return view('connexion');
})->name('connexion');

Route::get('/inscription', function() {
    return view('inscription');
})->name('inscription');

Route::get('/joueurs', function(){
    return view('joueurs');
});

Route::get('/1/{id}', function($id = null){
    return 'test : '.$id;
})->where([
    'id' => '[0-9]+'
]
);

Route::get('/test', function(Request $request){
    return [
        "name" => $_GET['name'],
        "Article 1" => "test"
    ];
});


/*              ROUTES POST             */

Route::post('/inscription',function(){
    request()->validate([
        'email' => ['required'],
        'pseudo' => ['required', 'min:5'],
        'pwd' => ['required', 'confirmed', 'min:8'],
        'pwd_confirmation' => ['required'],
    ],
    [
        'pwd.min' => 'Veuillez saisir un mot de passe d\'au moins :min caractères !'
    ]
    );

    $utilisateur = App\Utilisateur::create([
        'email' => request('email'),
        'pseudo' => request('pseudo'),
        'password' => bcrypt(request('password')),
    ]);

});

