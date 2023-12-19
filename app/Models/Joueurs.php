<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueurs extends Model
{
    use HasFactory;
    protected $table='joueurs';

    public static function joueursAvecF(){
        return self::where('pseudo','like','F%')->get();
    }
    public static function PosteJoueursAvecF(){
        return self::where('top','like','Mid')->get();
    }

    public static function equipeExcel(){
        $this->setTable('table2');
        return self::where('nom','like','Excel')->get();
    }
}

    