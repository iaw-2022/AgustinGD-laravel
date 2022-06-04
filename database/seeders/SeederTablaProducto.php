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
            'creo que es carne roja.',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1652574920/app-granja/Productos/Carne_bu3txz.png',
        );

        $this->crear(
            '1',
            true,
            'Carne Wagyu',
            'La distribucion de grasa mas preciosa.',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069945/app-granja/Productos/wagyu_ywp6un.png',
        );

        $this->crear(
            '1',
            true,
            'Carne de pollo',
            'creo que es carne blanca.',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955760/app-granja/Productos/carne-pollo_rg0h4i.png',
        );

        $this->crear(
            '1',
            true,
            'Carne de Cerdo',
            'Carne de oink oinks.',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069951/app-granja/Productos/carne-cerdo_syvlbu.png',
        );

        $this->crear(
            '1',
            true,
            'Patas de pollo',
            'Todavia caminan.',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955760/app-granja/Productos/patas-pollo_lpg1sk.png',
        );

        $this->crear(
            '1',
            true,
            'Carne Cruda',
            'Si respira y dice moo entonces es comestible.',
            '100',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069944/app-granja/Productos/carne-cruda_prdxat.png',
        );

        $this->crear(
            '2',
            true,
            'Leche de Vaca',
            'Leche especial de la vaca Mei.',
            '300',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1651665859/app-granja/Productos/leche_vzix8k.png',
        );

        $this->crear(
            '2',
            true,
            'Yogurt Griego',
            'viene de la Atlantida.',
            '300',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069945/app-granja/Productos/yogurt-griego_mzimsh.png',
        );

        $this->crear(
            '2',
            true,
            'Queso oloroso',
            'Tiene olor a patas olorosas.',
            '300',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955761/app-granja/Productos/queso_sdmu3m.png',
        );

        $this->crear(
            '3',
            true,
            'Berenjena',
            'Porfavor usar este emoji mas seguido.',
            '200',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1652574918/app-granja/Productos/berenjena_kq4ret.png',
        );

        $this->crear(
            '3',
            true,
            'Tomate',
            'Mate tomate toma té',
            '200',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955760/app-granja/Productos/tomate_qxvz4z.png',
        );

        $this->crear(
            '3',
            true,
            'Brocoli',
            'El mejor corte coreano (del sur)',
             '200',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955758/app-granja/Productos/brocoli_gbzwnj.png',
        );

        $this->crear(
            '4',
            true,
            'Bananas',
            'Return to monke 🐒.',
            '300',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069943/app-granja/Productos/bananas_nvzwo9.png',
        );

        $this->crear(
            '4',
            true,
            'Frutillas',
            'La verdad que muy rico che.',
            '300',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1652574926/app-granja/Productos/Frutillas_abfaru.png',
        );

        $this->crear(
            '4',
            true,
            'Mangos',
            'No tengo un mango para pagar esto.',
            '300',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069945/app-granja/Productos/mangos_gxoqdh.png',
        );

        $this->crear(
            '5',
            true,
            'Lengua de vaca',
            'Papilas gustativas para tus papilas gustativas.',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069944/app-granja/Productos/lengua-vaca_lpyns3.png',
        );

        $this->crear(
            '5',
            true,
            'Higado de vaca',
            'La comida mas nutritiva del mundo punto final.',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069945/app-granja/Productos/higado-vaca_gzwkpt.png',
        );

        $this->crear(
            '5',
            true,
            'Corazon de vaca',
            'I ❤️ U.',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069950/app-granja/Productos/corazon-vaca_x11ewx.png',
        );

        $this->crear(
            '5',
            true,
            'Menudos de pollo',
            'Sorprendentemente tienen muy buen sabor.',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1654069943/app-granja/Productos/higado-pollo_brqrve.png',
        );

        $this->crear(
            '6',
            true,
            'Castañas de cajú',
            'Nuez de la india',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955758/app-granja/Productos/caju_ucblgz.png',
        );

        $this->crear(
            '6',
            true,
            'Almendras',
            'Cuidado con los oxalatos.',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955758/app-granja/Productos/almendras_q0jskp.png',
        );

        $this->crear(
            '7',
            true,
            'Trigo',
            'Tres tristes tigres tragaban trigo en un trigal.',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955759/app-granja/Productos/trigo_oejxpw.png',
        );

        $this->crear(
            '7',
            true,
            'Copos de Maiz',
            'No hay Zucaritas porque los tigres se comen el ganado.',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1653955760/app-granja/Productos/copos-de-maiz_irkabx.png',
        );

        $this->crear(
            '7',
            true,
            'Choclo',
            'Expresion argentina de cuando algo es mucho o muy largo.',
            '500',
            'https://res.cloudinary.com/dtkj9tvgw/image/upload/v1652574926/app-granja/Productos/Choclo_vvj52k.png',
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
