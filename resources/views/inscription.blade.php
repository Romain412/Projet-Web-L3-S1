@extends('layouts.base')

@section('title','Inscription')
@section('stylesheet', asset('css/compte.css'))

@section('content')

    <br><br>

     @if(session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif 

<!-- <ul>
    @foreach ($errors->all() as $error)
        <li class = "form-error"> {{ $error }}</li>
    @endforeach
</ul> -->

    <form action="/inscription" method="post"> <!-- inscription.php au lieu de /inscription-->
        {{ csrf_field() }}
        <fieldset>
            <legend>Création de votre compte</legend>
            <br>
            <label for="pseudo">Pseudo</label>
            <br>
            <input type="text" name="pseudo" required placeholder="Pseudo" value = "{{ old('pseudo') }}">

            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" required placeholder="prenom.nom@exemple.com" value = "{{ old('email')}}">
            
            <br><br>
            <label for="pwd">Mot de passe</label>
            <br>
            <input type="password" name="pwd" required placeholder="Mot de passe">

            <br><br>

            <label for="pwd_confirmation">Confirmer mot de passe</label>
            <br>
            <input type="password" name="pwd_confirmation" required placeholder="Confirmer mot de passe">
            <br><br>

            @if ($errors->any())
                <div class="text-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit">Créer mon compte</button>
            <br><br>

        </fieldset>
    </form>
    <br>
    <div id="alternative">
    <p>Déjà client ? :</p>
    <a href="/connexion"><button>Se connecter</button></a>
    </div>
    

    <script>document.getElementById('nom').focus();</script>

@endsection