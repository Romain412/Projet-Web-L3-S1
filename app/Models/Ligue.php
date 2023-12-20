<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligue extends Model
{
    use HasFactory;

    protected $table = 'ligues';
    protected $fillable = [
        'id_ligue',
        'nom',
        'logo'
    ];
}
