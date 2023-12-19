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
        Schema::create('matchs', function (Blueprint $table) {
            $table->id('id_match');
            $table->unsignedBigInteger('ref_equipe1');
            $table->unsignedBigInteger('ref_equipe2');
            $table->integer('format');
            $table->dateTime('date');

            $table->foreign('ref_equipe1')->references('id_equipe')->on('equipes')->onDelete('cascade');
            $table->foreign('ref_equipe2')->references('id_equipe')->on('equipes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchs');
    }
};
