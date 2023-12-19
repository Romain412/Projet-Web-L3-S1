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
        Schema::create('amities', function (Blueprint $table) {
            $table->id('id_amitie');
            $table->unsignedBigInteger('ref_utilisateur1');
            $table->unsignedBigInteger('ref_utilisateur2');

            $table->foreign('ref_utilisateur1')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');
            $table->foreign('ref_utilisateur2')->references('id_utilisateur')->on('utilisateurs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amities');
    }
};
