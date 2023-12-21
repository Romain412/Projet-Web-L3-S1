@extends('layouts.base')

@section('title','Page d\'accueil')
@section('stylesheet', asset('css/ligues.css'))

@section('content')


@php
    $nomL= request('nom');
    
    $infosLigues = DB::select('SELECT nom,logo FROM ligues WHERE nom = "'.$nomL.'"'); 

    $infosMatchs = DB::select('SELECT a.nom AS nom1, b.nom AS nom2, c.date, c.format, d.nom
FROM rencontres c, equipes a, equipes b, ligues d, appartenances_equipe_ligue aa
WHERE d.nom = "'.$nomL.'" AND aa.ref_ligue = d.id_ligue AND a.id_equipe = aa.ref_equipe AND c.ref_equipe1 = a.id_equipe AND c.ref_equipe2 = b.id_equipe '); 

    $logos = DB::select('SELECT a.logo AS logo1, b.logo AS logo2 FROM equipes a, equipes b, rencontres c WHERE c.ref_equipe1 = a.id_equipe AND c.ref_equipe2 = b.id_equipe');

@endphp



@foreach($infosLigues as $ifl)
    
    <img id="logoLigue" src="{{$ifl->logo}}" alt="logoLigue">
    <h1>Matchs de la {{$ifl->nom}}</h1><br>
@endforeach

<section id="vitrine_accueil">
@foreach (array_map(null, $logos, $infosMatchs) as [$logo, $infosMatch])
    @if ($logo && $infosMatch)

        <div class="bet-box"><a href="">
            <img src='{{ $logo->logo1}}' alt="Logo_Team">
            <div class="bet-text">
                <h3>{{$infosMatch->nom1}}   VS   {{$infosMatch->nom2}}</h3>
                <h4>{{$infosMatch->date}}</h4>
                <p class="type_match">BO {{$infosMatch->format}}</p>
            </div>
            <img src='{{ $logo->logo2}}' alt="Logo_Team">
        </a></div>

    
    @else
    <h2>Pas de match pour cette ligue</h2>
    @php
    break;
    @endphp
    @endif
    

    @endforeach
</section>



<h1>Classement des équipes</h1>







@endsection