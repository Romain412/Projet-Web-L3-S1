<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartenance_joueur_equipe extends Model
{
    use HasFactory;

    protected $table = 'appartenances_joueur_equipe';
    protected $fillable = [
        'id_appartenance',
        'ref_joueur',
        'ref_equipe'
    ];
}
