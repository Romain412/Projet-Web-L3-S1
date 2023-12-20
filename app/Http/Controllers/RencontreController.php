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
}
