<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tareas')->insert([ //Especificamos la tabla sobre la que vamos a trabajar
            'tarea'=> 'Practica seeders',
            'descripcion' => "Creacion de seeder para tabla tareas",
            'categoria'=> 'Escuela',
            'created_at' => now(),
            'updated_at' =>now()
            
        ]);
    }
}
