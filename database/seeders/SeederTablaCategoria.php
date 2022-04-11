<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTablaCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Carnes',
            'descripcion' => 'si es musculo es valido',
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Lacteos',
            'descripcion' => 'si es de una ubre mejor',
        ]);
    }
}
