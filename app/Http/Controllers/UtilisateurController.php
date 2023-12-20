<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    public function ajouter_utilisateur(Request $request){

        $validate = $request->validate([
            'email' => ['required'],
            'pseudo' => ['required', 'min:3'],
            'pwd' => ['required', 'confirmed', 'min:8'],
            'pwd_confirmation' => ['required'],
        ],
        [   // trouver le moyen d'afficher cette merde
            'pseudo.min' => 'Veuillez saisir un pseudo d\'au moins :min caractères !',
            'pwd.min' => 'Veuillez saisir un mot de passe d\'au moins :min caractères !',
            'pwd.confirmed' => 'Veuillez saisir le même mot de passe !',
        ]
        );
    
        if($validate){
            $user = new Utilisateur;
            
            $user->pseudo = $request->pseudo;
            $user->email = $request->email;
            $user->password = $request->pwd;
        }else{
            //qlq chose pour afficher les erreurs
        }

        $user->save();

        return redirect('/inscription')->with('status', 'Connexion réussie');
    }
}
