<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joueurs;//utilisation du modele associe

class JoueursController extends Controller
{
    public function joueursAvecF(){
        $joueurs=Joueurs::joueursAvecF();
        return view('joueurs')->with('joueurs',$joueurs);
    }

    public function equipeExcel(){
        $equipes=Equipes::equipeExcel();
        return view('joueurs')->with('equipes',$equipes);
    }
}

