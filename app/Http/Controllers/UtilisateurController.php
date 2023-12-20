<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function store(Request $request){
        $user = new Utilisateur;
        
        $user->pseudo = $request->pseudo;
        $user->email = $request->email;
        $user->password = $request->pwd;

        $user->save();

        return redirect('/inscription');
    }
}
