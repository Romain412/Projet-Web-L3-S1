<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'ref_coach' => 'required',
            'nom' => 'required',
            'logo' => 'required'
        ]);

        if($validate){
            $equipe = new Equipe();
            $equipe->ref_coach = $request->ref_coach;
            $equipe->nom = $request->nom;
            $equipe->logo = $request->logo;

            $equipe->save();
        }
    }
}
