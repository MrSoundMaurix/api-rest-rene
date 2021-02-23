<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function index()
    {
        $Alumnos = Alumno::all();
        return response()->json($Alumnos, 200);
    }
}
