@extends('layouts.base')

@section('title','Inscription')
@section('stylesheet', asset('css/compte.css'))

@section('content')

    <br><br>
    <form action="inscription.php" method="post">
        <fieldset>
            <legend>Création de votre compte</legend>
            <br>
            <label for="nom">Nom</label>
            <br>
            <input type="text" name="nom" id="nom" required placeholder="Nom">
            <br>
            <label for="prenom">Prénom</label>
            <br>
            <input type="text" name="prenom" required placeholder="Prenom">
            <br>
            <label for="pseudo">Pseudo</label>
            <br>
            <input type="text" name="pseudo" required placeholder="Pseudo">
            <br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" required placeholder="prenom.nom@exemple.com">
            <br>
            <label for="mdp">Mot de passe</label>
            <br>
            <input type="password" name="mdp" required placeholder="Mot de passe">
            <br>
            <button type="submit">Créer mon compte</button>
            <br><br>

        </fieldset>
    </form>
    <br>
    <div id="alternative">
    <p>Déjà client ? :</p>
    <a href="/connexion"><button>Se connecter</button></a>
    </div>
    <br>

    <script>document.getElementById('nom').focus();</script>

@endsection