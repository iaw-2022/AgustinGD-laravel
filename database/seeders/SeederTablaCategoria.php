<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeederTablaCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->crear(
            'Carnes',
            'Si es musculo es valido.',
        );

        $this->crear(
            'Lacteos',
            'Si es de una ubre mejor.',
        );

        $this->crear(
            'Vegetales',
            'Los arboles son vegetales.',
        );

        $this->crear(
            'Frutas',
            'Fruto comestible de ciertas plantas y árboles, en especial cuando tiene mucha agua y es de sabor dulce.',
        );

        $this->crear(
            'Organos',
            'Mejor adentro que afuera.',
        );

        $this->crear(
            'Nueces',
            'Categoria favorita de Alvin y las Ardillas.',
        );
    }

    private function crear($nombre, $descripcion){
        DB::table('categorias')->insert([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
