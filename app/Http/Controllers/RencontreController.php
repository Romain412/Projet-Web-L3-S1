<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RencontreController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'ref_equipe1' => 'required',
            'ref_equipe2' => 'required',
            'format' => 'required',
            'date' => 'required'
        ]);

        if($validate){
            $rencontre = new Rencontre();
            $rencontre->ref_equipe1 = $request->ref_equipe1;
            $rencontre->ref_equipe2 = $request->ref_equipe2;
            $rencontre->format = $request->format;
            $rencontre->date = $request->date;

            $rencontre->save();
        }
    }

    public function show($id){
        $rencontre = Rencontre::select('rencontres.*', 'equipe1.logo as logo_equipe1', 'equipe 1.nom as nom_equipe1', 'equipe2.logo as logo_equipe2', 'equipes2.nom as nom_equipe2')
        ->join('equipes as equipe1', 'rencontres.ref_equipe1', '=', 'equipe1.id')
        ->join('equipes as equipe2', 'rencontres.ref_equipe2', '=', 'equipe2.id')
        ->where('rencontres.id', $id_match)
        ->first();

        $equipe1 = [
            'logo' => $match->logo_equipe1,
            'nom' => $match->nom_equipe1,
        ];
        
        $equipe2 = [
            'logo' => $match->logo_equipe2,
            'nom' => $match->nom_equipe2,
        ];
    }
}
