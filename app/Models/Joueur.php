<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    protected $table = 'joueurs';
    protected $fillable = [
        'id_joueur',
        'poste',
        'image',
        'pseudo'
    ];
}
