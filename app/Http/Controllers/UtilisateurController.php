<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Utilisateur;


class UtilisateurController extends Controller
{
    public function ajouter_utilisateur(Request $request){

        $validate = $request->validate([
            'email' => ['required', function($attribute, $value, $fail){
                $emailExists = Utilisateur::where('email', $value)->exists();

                if($emailExists) $fail('Cet email est déjà utilisé !');

            }],

            'pseudo' => ['required', 'min:3', function ($attribute, $value, $fail) {
                // Vérifier si le pseudo existe déjà
                $pseudoExists = Utilisateur::where('pseudo', $value)->exists();

                if ($pseudoExists)$fail('Ce pseudo est déjà utilisé !');

            }],
            
            'pwd' => ['required', 'confirmed', 'min:8'],
            'pwd_confirmation' => ['required'],
        ],
        [ 
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
            
            $user->save();
        }

        

        return redirect('/inscription')->with('status', 'Inscription réussie');
    }

    public function connecter_utilisateur(Request $request){

        $validate = $request->validate([
            'email' => ['required', function($attribute, $value, $fail){
                $emailExists = Utilisateur::where('email', $value)->exists();

                if(!$emailExists) $fail('Cet email n\'est associé a aucun compte !');
            }],
            
            'pwd' => ['required', function($attribute, $value, $fail) use ($request){
                $user = Utilisateur::where('email', $request->email)->first();
                if($user) $pwdExists = Hash::check($value, $user->password);
                else return;
                if(!$pwdExists) $fail('Mot de passe incorrect !');
            }]
        ]);
        return redirect('/connexion')->with('status', 'Connexion réussie');
    }
}
