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
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1652576402/app-granja/Categorias/chanchos_xqv5tb.jpg',
        );

        $this->crear(
            'Lacteos',
            'Si es de una ubre mejor.',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1652575869/app-granja/Categorias/vacas_gelaow.jpg',
        );

        $this->crear(
            'Vegetales',
            'Los arboles son vegetales.',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069810/app-granja/Categorias/vegetales_uybp03.jpg',
        );

        $this->crear(
            'Frutas',
            'Fruto comestible de ciertas plantas y árboles, en especial cuando tiene mucha agua y es de sabor dulce.',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069810/app-granja/Categorias/frutas_c07tqg.jpg',
        );

        $this->crear(
            'Organos',
            'Mejor adentro que afuera.',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653954518/app-granja/Categorias/organos_zidin7.jpg',
        );

        $this->crear(
            'Nueces',
            'Categoria favorita de Alvin y las Ardillas.',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653954512/app-granja/Categorias/nueces_zegqyl.jpg',
        );

        $this->crear(
            'Cereales',
            'No hay zucaritas, los tigres se comen al ganado.',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653954519/app-granja/Categorias/cereales_cfsccq.jpg',
        );
    }

    private function crear($nombre, $descripcion, $imagen_dir){
        DB::table('categorias')->insert([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'imagen_dir' => $imagen_dir,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
