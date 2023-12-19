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
        Schema::create('appartenances_joueur_equipe', function (Blueprint $table) {
            $table->id('id_appartenance');
            $table->unsignedBigInteger('ref_joueur');
            $table->unsignedBigInteger('ref_equipe');
            
            $table->foreign('ref_joueur')->references('id_joueur')->on('joueurs')->onDelete('cascade');
            $table->foreign('ref_equipe')->references('id_equipe')->on('equipes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartenances_joueur_equipe');
    }
};