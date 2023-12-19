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
        Schema::create('appartenances_equipe_ligue', function (Blueprint $table) {
            $table->id('id_appartenance');
            $table->unsignedBigInteger('ref_equipe');
            $table->unsignedBigInteger('ref_ligue');

            $table->foreign('ref_ligue')->references('id_ligue')->on('ligues')->onDelete('cascade');
            $table->foreign('ref_equipe')->references('id_equipe')->on('equipes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartenances_equipe_ligue');
    }
};