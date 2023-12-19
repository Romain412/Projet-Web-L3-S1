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


<!-- Le texte de votre page va ici -->
<h1>PARIS DU JOUR</h1>

<!-- Code pour les cases de pari -->
<section id="vitrine_accueil">
    <!-- Il faudra que ca soit fait avec une boucle php pour ne pas repeter le meme code 6 fois -->
    <div class="bet-box"><a href="">
        <img src='/img/equipes/logo_solary.png' alt="Logo_Solary">
        <div class="bet-text">
            <h3>Solary   VS   Team Go</h3>
            <h4>19/12/2023 - 17h00</h4>
            <p class="type_match">BO 3</p>
        </div>
        <img src='/img/equipes/logo_team_go.png' alt="Logo_Team_Go">
    </div></a>
    
    <div class="bet-box"><a href="">
        <img src='/img/equipes/logo_gentlemates.png' alt="Logo_Gentlemates">
        <div class="bet-text">
            <h3>Gentlemates   VS   KT Rolster</h3>
            <h4>19/12/2023 - 18h00</h4>
            <p class="type_match">BO 1</p>
        </div>
        <img src='/img/equipes/logo_kt_rolster.png' alt="Logo_KT_Rolster">
    </div></a>

    <div class="bet-box"><a href="">
        <img src='/img/equipes/logo_liiv_sandbox.png' alt="Logo_Liiv_Sandbox">
        <div class="bet-text">
            <h3>Liiv Sandbox   VS   T1</h3>
            <h4>19/12/2023 - 19h00</h4>
            <p class="type_match">BO 2</p>
        </div>
        <img src='/img/equipes/logo_t1.png' alt="Logo_T1">
    </div></a>

    <div class="bet-box"><a href="">
        <img src='/img/equipes/logo_gen_g.png' alt="Logo_Gen_G">
        <div class="bet-text">
            <h3>Gen.G   VS   DRX</h3>
            <h4>20/12/2023 - 17h00</h4>
            <p class="type_match">BO 1</p>
        </div>
        <img src='/img/equipes/logo_drx.png' alt="Logo_DRX">
    </div></a>
    
    <div class="bet-box"><a href="">
        <img src='/img/equipes/logo_dplus_kia.png' alt="Logo_Dplus_KIA">
        <div class="bet-text">
            <h3>Dplus KIA   VS   Team Heretics</h3>
            <h4>19/12/2023 - 18h00</h4>
            <p class="type_match">BO 3</p>
        </div>
        <img src='/img/equipes/logo_team_heretics.png' alt="Logo_Team_Heretics">
    </div></a>

    <div class="bet-box"><a href="">
        <img src='/img/equipes/logo_sk_gaming.png' alt="Logo_SK_Gaming">
        <div class="bet-text">
            <h3>SK Gaming   VS   Rogue</h3>
            <h4>19/12/2023 - 19h00</h4>
            <p class="type_match">BO 1</p>
        </div>
        <img src='/img/equipes/logo_rogue.png' alt="Logo_Rogue">
    </div></a>
    
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

