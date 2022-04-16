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
            'nombre' => 'Carne de vaca',
            'descripcion' => 'creo que es carne roja',
            'precioPorUnidad' => '100',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '1',
            'disponible' => true,
            'nombre' => 'Carne de toro',
            'descripcion' => 'creo que es carne roja',
            'precioPorUnidad' => '100',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '1',
            'disponible' => true,
            'nombre' => 'Carne de pollo',
            'descripcion' => 'creo que es carne blanca',
            'precioPorUnidad' => '100',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '1',
            'disponible' => true,
            'nombre' => 'Carne de Gallina',
            'descripcion' => 'creo que es carne blanca',
            'precioPorUnidad' => '100',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '3',
            'disponible' => true,
            'nombre' => 'Pepino',
            'descripcion' => 'Algo verde',
            'precioPorUnidad' => '200',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '3',
            'disponible' => true,
            'nombre' => 'Lechuga',
            'descripcion' => 'Algo verde',
            'precioPorUnidad' => '200',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '3',
            'disponible' => true,
            'nombre' => 'Brocoli',
            'descripcion' => 'Algo verde',
            'precioPorUnidad' => '200',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '2',
            'disponible' => true,
            'nombre' => 'Leche',
            'descripcion' => 'creo que es leche blanca',
            'precioPorUnidad' => '300',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('productos')->insert([
            'categoria_id' => '2',
            'disponible' => true,
            'nombre' => 'Yogurt Griego',
            'descripcion' => 'viene de la Atlantida',
            'precioPorUnidad' => '300',
            'imagen_dir' => 'alguna direccion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
