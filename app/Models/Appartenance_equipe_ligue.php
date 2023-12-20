<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartenance_equipe_ligue extends Model
{
    use HasFactory;

    protected $table = 'appartenances_equipe_ligue';
    protected $fillable = [
        'id_appartenance',
        'ref_equipe',
        'ref_ligue'
    ];
}
