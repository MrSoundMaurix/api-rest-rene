<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'id' => 1,
            'nombre' => 'Rene Ipiales',
            'semestre' => 10,
            'foto' => 'https://ichef.bbci.co.uk/news/640/cpsprodpb/1076B/production/_104453476_portada-rene.jpg',
            'fecha_ingreso' => '2020-10-10',
            'id_carrera' => 1
        ]);
        DB::table('alumnos')->insert([
            'id' => 2,
            'nombre' => 'Andrea Perez',
            'semestre' => 1,
            'foto' => 'https://www.longines.com/uploads/ambassador/part2/ambassador-eses-andre-agassi-1600x1432.jpg',
            'fecha_ingreso' => '2019-10-10',
            'id_carrera' => 1
        ]);
        DB::table('alumnos')->insert([
            'id' => 3,
            'nombre' => 'Pablo Merces',
            'semestre' => 10,
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREvGCxr9ZH0pggVzVS6yYJtAGXDioJDAx7hg&usqp=CAU',
            'fecha_ingreso' => '2020-10-10',
            'id_carrera' => 2
        ]);
        DB::table('alumnos')->insert([
            'id' => 4,
            'nombre' => 'Lucha Pilotar',
            'semestre' => 7,
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgJ7dVmV5DfgnofoeWuPrGZ7CchmEHWHcbwg&usqp=CAU',
            'fecha_ingreso' => '2020-02-10',
            'id_carrera' => 1
        ]);
    }
}
