<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    protected $fillable = [
        'gruppo_musicale',
        'traccia',
        'genere',
        'data_esibizione',
        'orario_esibizione'
    ];
}
