@extends('layouts.base')

@section('title','Page d\'accueil')
@section('stylesheet', asset('css/accueil.css'))

@section('content')

<nav id="sidebar">
    <a href="page1.php">WORLD</a>
    <a href="page2.php">MSI</a>
    <a href="page3.php">LEC</a>
    <a href="page4.php">LCK</a>
    <a href="page5.php">LFL</a>
</nav>

<h1>PARIS DU JOUR</h1>

<br>

@php
    $infos = DB::select('SELECT a.nom AS nom1, b.nom AS nom2, c.date, c.format, d.nom
FROM rencontres c, equipes a, equipes b, ligues d, appartenances_equipe_ligue aa
WHERE d.nom = "LEC" AND aa.ref_ligue = d.id_ligue AND a.id_equipe = aa.ref_equipe AND c.ref_equipe1 = a.id_equipe AND c.ref_equipe2 = b.id_equipe LIMIT 6'); 

    $logos = DB::select('SELECT a.logo AS logo1, b.logo AS logo2 FROM equipes a, equipes b, rencontres c WHERE c.ref_equipe1 = a.id_equipe AND c.ref_equipe2 = b.id_equipe LIMIT 6');

@endphp


<!-- Code pour les cases de pari -->
<section id="vitrine_accueil">
@foreach (array_map(null, $logos, $infos) as [$logo, $info])

    <div class="bet-box"><a href="">
        <img src='{{ $logo->logo1}}' alt="Logo_Team">
        <div class="bet-text">
            <h3>{{$info->nom1}}   VS   {{$info->nom2}}</h3>
            <h4>{{$info->date}}</h4>
            <p class="type_match">BO {{$info->format}}</p>
        </div>
        <img src='{{ $logo->logo2}}' alt="Logo_Team">
    </div></a>
    
    @endforeach
</section>


<br><br>
<h1>ARTICLES DE PRESSE</h1>
<br>

<!-- Nouvelle case de presse -->
<div class="press-box">
    <img src='https://img.lemde.fr/2019/11/10/0/0/3500/2333/800/0/75/0/dad5482_GDN2130_ESPORTS-LOL-_1110_11.JPG' alt="Image 1">
    <div class="press-text">
        <h3>Pourquoi « League of Legends » a révolutionné l’e-sport ?</h3>
        <p> 
            Fin janvier, la nouvelle saison des championnats officiels de League of Legends (LoL),
            jeu multijoueur de stratégie et d’action par équipes, a repris un peu partout dans le 
            monde entier… ou presque. En raison de l’épidémie de coronavirus 2019-nCoV, la LPL, le 
            championnat régional de Chine – l’un des plus importants du monde – a dû suspendre son 
            activité.
            En France, les premiers matchs de la saison ont eu lieu le 23 janvier, et ont été marqués 
            par l’arrivée d’une deuxième division dans le championnat national. Une compétition étoffée 
            qui suit le succès, deux mois et demi plus tôt, de l’organisation des finales des championnats 
            du monde de LoL (les « Worlds ») à Paris.
            <br><br>
            <a href="https://www.lemonde.fr/pixels/article/2020/02/03/jeu-video-pourquoi-league-of-legends-a-revolutionne-l-e-sport_6028274_4408996.html#:~:text=Le%20contr%C3%B4le%20de%20Riot%20Games&text=%C2%AB%20Ils%20ont%20calqu%C3%A9%20les%20structures,s'affrontent%20des%20%C3%A9quipes%20locales."><b>[Lien vers la suite de l'article]</b></a>
        </p>
    </div>
</div>
<br>
<!-- Nouvelle case de presse -->
<div class="press-box">
    <img src='https://www.francetvinfo.fr/pictures/xwKzeoNCcny_-7-kbHrtTrl4DpY/0x46:5732x3267/2656x1494/filters:format(avif):quality(50)/2023/11/25/000-34473g2-6561f3f7aa0a1837008192.jpg' alt="Image 2">
    <div class="press-text">
        <h3>Faker plus que jamais dans la légende. Le meneur de l'équipe sud-coréenne T1 remporte son quatrième titre mondial sur le jeu League of Legends. Un joueur iconique en Corée, bien au-delà de la communauté du jeu vidéo.</h3>
        <p> 
            T1 reprend sa couronne ! L'équipe sud-coréenne vient de remporter à domicile 
            son quatrième titre mondial sur le jeu League of Legends grâce à sa victoire 
            contre l'équipe chinoise Weibo Gaming. Le capitaine de cette équipe, le vétéran 
            Faker, entre un peu plus dans l'Histoire de l'esport, comme l'explique Laure Valée, 
            consultante esport de franceinfo.
            <br><br>
            <b>
                franceinfo : L'équipe sud-coréenne T1 remporte son quatrième titre mondial au terme 
                d'une finale historique ?</b>
            <br><br>
            Laure Valée : T1 est l'équipe la plus titrée de Corée du Sud. Cela fait près de 20 ans 
            qu'elle domine la scène LoL sud-coréenne et donc mondiale. C'est son quatrième titre mondial. 
            Une finale qui a rassemblé plus de 6,5 millions de spectateurs en pic en simultané, ce qui fait 
            de ce match un record, du jamais vu pour une finale d'esport.
            <br><br>
            <a href="https://www.francetvinfo.fr/replay-radio/franceinfo-esport/league-of-legends-en-coree-faker-est-une-veritable-star-nationale-comme-des-acteurs-de-cinema-ou-des-groupes-de-k-pop_6176274.html"><b>[Lien vers la suite de l'article]</b></a>
        </p>
    </div>
</div>
<br><br>


@endsection
