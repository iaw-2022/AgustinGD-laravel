<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeederTablaProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'categoria_id' => '1',
            'disponible' => true,
            'nombre' => 'carne',
            'descripcion' => 'creo que es carne roja',
            'precioPorUnidad' => '100',
            'imagen_dir' => 'alguna direccion1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '1',
            'disponible' => true,
            'nombre' => 'pollo',
            'descripcion' => 'creo que es carne blanca',
            'precioPorUnidad' => '200',
            'imagen_dir' => 'alguna direccion2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '2',
            'disponible' => true,
            'nombre' => 'leche',
            'descripcion' => 'creo que es leche blanca',
            'precioPorUnidad' => '300',
            'imagen_dir' => 'alguna direccion3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
