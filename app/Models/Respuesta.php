<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'userAlumno',
        'userMaestro',
        'materia',
        'respuesta1',
        'respuesta2',
        'respuesta3',
        'respuesta4',
        'respuesta5'
    ];
}
