@extends('layouts.base')

@section('title','Connexion')
@section('stylesheet', asset('css/compte.css'))

@section('content')

    <br><br>
    <form action="connexion.php" method="post">
        <fieldset>
            <legend>Entrez vos identifiants</legend>
            <br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" id="email" required placeholder="prenom.nom@exemple.com">
            <br><br>
            <label for="mdp">Mot de passe</label>
            <br>
            <input type="password" name="mdp" required placeholder="Mot de passe">
            <br><br>
            <button type="submit">Se connecter</button>
            <br><br>
        </fieldset>
    </form>

    <br>
    <div id="alternative">
    <p>Pas encore de compte :</p>
    <a href="/inscription"><button>Creer un compte</button></a>
    </div>
    <br>

    <script>document.getElementById('email').focus();</script>

@endsection