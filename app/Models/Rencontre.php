<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rencontre extends Model
{
    use HasFactory;

    protected $table = 'rencontres';
    protected $fillable = [
        'id_rencontre',
        'ref_equipe1',
        'ref_equipe2',
        'format',
        'date'
    ];
}
