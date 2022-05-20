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
        $this->crear(
            '1',
            true,
            'Carne de vaca',
            'creo que es carne roja',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );

        $this->crear(
            '1',
            true,
            'Carne de toro',
            'creo que es carne roja',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );

        $this->crear(
            '1',
            true,
            'Carne de pollo',
            'creo que es carne blanca',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );

        $this->crear(
            '1',
            true,
            'Carne de Gallina',
            'creo que es carne blanca',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );

        $this->crear(
            '3',
            true,
            'Pepino',
            'Algo verde',
            '200',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );

        $this->crear(
            '3',
            true,
            'Lechuga',
            'Algo verde',
            '200',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );

        $this->crear(
            '3',
            true,
            'Brocoli',
            'Algo verde',
             '200',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );

        $this->crear(
            '2',
            true,
            'Leche',
            'creo que es leche blanca',
            '300',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );

        $this->crear(
            '2',
            true,
            'Yogurt Griego',
            'viene de la Atlantida',
            '300',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/leche_vzix8k.png',
        );
    }

    private function crear($categoria_id, $disponible, $nombre, $descripcion, $precioPorUnidad , $imagen_dir){
        DB::table('productos')->insert([
            'categoria_id' => $categoria_id,
            'disponible' => $disponible,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precioPorUnidad' => $precioPorUnidad,
            'imagen_dir' => $imagen_dir,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
