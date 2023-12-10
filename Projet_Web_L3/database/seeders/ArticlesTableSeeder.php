<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article=new Post();
        $article->titre="Titre article 1";
        $article->contenu="Contenu de l'article 1";
        $article->save();
        //
    }
}
