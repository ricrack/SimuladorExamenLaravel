<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $fillLable = [
        'maestro',
        'materia',
        'pregunta1',
        'respuesta1',
        'pregunta2',
        'respuesta2',
        'pregunta3',
        'respuesta3',
        'pregunta4',
        'respuesta4',
        'pregunta5',
        'respuesta5'
    ];
}
