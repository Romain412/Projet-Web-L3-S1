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
        Schema::create('pronostics', function (Blueprint $table) {
            $table->unsignedBigInteger('ref_utilisateur');
            $table->unsignedBigInteger('ref_rencontre');
            $table->integer('score_equipe_1');
            $table->integer('score_equipe_2');
            
            $table->primary(['ref_utilisateur', 'ref_rencontre']);
            $table->foreign('ref_rencontre')->references('id_rencontre')->on('rencontres')->onDelete('cascade');
            $table->foreign('ref_utilisateur')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pronostics');
    }
};
