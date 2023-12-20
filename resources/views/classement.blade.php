@extends('layouts.base')

@section('title','Classement')
@section('stylesheet', asset('css/classement.css'))

@section('content')

<h1>CLASSEMENT DES JOUEURS</h1>

<button id="ClassementAmis" onclick="afficherAmis()">Amis</button>
<button onclick="afficherJoueurs()">Tous les joueurs</button>

<table>
    <thead>
        <tr>
            <th>Rang</th>
            <th>Joueur</th>
            <th>Paris joués</th>
            <th>Points</th>
        </tr>
    </thead>
    <tbody id="classementBody">
        
    </tbody>
</table>

<br><br>

<script>
    // Les données des amis
    var listeAmis = [
        { nom: 'Ronan', paris: 6, points: 21 },
        { nom: 'Kevin', paris: 7, points: 20 },
        { nom: 'Romain', paris: 50, points: 5 },
        { nom: 'Riad', paris: 4, points: 7 },
        { nom: 'Kenzi', paris: 7, points: 18 },
        { nom: 'Moncef', paris: 7, points: 19 },
    ];
    
    // Les données de tous les joueurs
    var listeJoueurs = [
        { nom: 'Ronan', paris: 8, points: 21 },
        { nom: 'Kevin', paris: 7, points: 20 },
        { nom: 'Romain', paris: 50, points: 5 },
        { nom: 'Riad', paris: 4, points: 7 },
        { nom: 'Kenzi', paris: 7, points: 18 },
        { nom: 'Moncef', paris: 7, points: 19 },
        { nom: 'LeMecDeMonBatiment', paris: 19, points: 22 },
        { nom: 'Piravine', paris: 14, points: 29 },
        { nom: 'Hawa', paris: 4, points: 7 },
        { nom: 'Sebastian', paris: 15, points: 27 },
        { nom: 'Amel', paris: 8, points: 12 },
        { nom: 'Clara', paris: 5, points: 8 },
        { nom: 'Sami', paris: 12, points: 15 },
        { nom: 'Naim', paris: 11, points: 8 },
        { nom: 'Badr', paris: 6, points: 12 },
        { nom: 'Mariama', paris: 9, points: 11 },
        { nom: 'Manel', paris: 9, points: 9 },
        { nom: 'Hossein', paris: 8, points: 16 }
    ];

    // Trie les joueurs en fonction des points (ordre décroissant)
    listeJoueurs.sort(function(a, b) {
        return b.points - a.points;
    });

    // Affiche les joueurs dans le tableau
    var classementBody = document.getElementById('classementBody');
    listeJoueurs.forEach(function(joueur, index) {
        var row = document.createElement('tr');
        row.innerHTML = '<td>' + (index + 1) + '</td>' +
                        '<td>' + joueur.nom + '</td>' +
                        '<td>' + joueur.paris + '</td>' +
                        '<td>' + joueur.points + '</td>';
        classementBody.appendChild(row);
    });

    // Fonction d'affichage

    function afficherAmis() {
        var classementBody = document.getElementById('classementBody');
        classementBody.innerHTML = ''; // Efface le contenu actuel du tableau

        listeAmis.sort(function(a, b) {
            return b.points - a.points;
        });

        // Affiche les amis dans le tableau
        listeAmis.forEach(function(ami, index) {
            var row = document.createElement('tr');
            row.innerHTML = '<td>' + (index + 1) + '</td>' +
                            '<td>' + ami.nom + '</td>' +
                            '<td>' + ami.paris + '</td>' +
                            '<td>' + ami.points + '</td>';
            classementBody.appendChild(row);
        });
    }

    
    function afficherJoueurs() {
        var classementBody = document.getElementById('classementBody');
        classementBody.innerHTML = ''; // Efface le contenu actuel du tableau

        listeJoueurs.sort(function(a, b) {
            return b.points - a.points;
        });

        // Affiche les joueurs dans le tableau
        listeJoueurs.forEach(function(joueur, index) {
            var row = document.createElement('tr');
            row.innerHTML = '<td>' + (index + 1) + '</td>' +
                            '<td>' + joueur.nom + '</td>' +
                            '<td>' + joueur.paris + '</td>' +
                            '<td>' + joueur.points + '</td>';
            classementBody.appendChild(row);
        });
    }

</script>

@endsection