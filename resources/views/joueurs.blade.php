<!-- Vue associe au controlleur JoueursControlleur et au modele Joueurs -->

<h1>Liste des joueurs dont le nom commence par "F"</h1>

<ul>
    @foreach ($joueurs as $joueur)
        <li>{{ $joueur->pseudo }}</li>
    @endforeach
</ul>


<h1>Liste des equipes dont le nom est "Excel"</h1>

<ul>
    @foreach ($equipes as $equipe)
        <li>{{ $equipe->nom }}</li>
    @endforeach
</ul>