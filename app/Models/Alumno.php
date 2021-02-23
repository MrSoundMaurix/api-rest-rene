<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'nombre', 'semestre', 'foto', 'fecha_ingreso', 'id_carrera'
    ];
}
