<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) { // changer dans app/models/utilisateur.php
            $table->id('id_utilisateur');
            $table->string('pseudo')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger('points')->default(0);

            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};

/*
ordre de création des tables :

1.  Utilisateur
2.  Amitié
3.  Coach
4.  Equipe
5.  Ligue
6.  Appartenance_ligue_equipe
7.  Groupe
8.  Appartenance_groupe
9.  Match
10. Joueur
11. Appartenance_equipe_joueur
12. Champion
13. Stats_joueur_champion
14. Pronostic

*/