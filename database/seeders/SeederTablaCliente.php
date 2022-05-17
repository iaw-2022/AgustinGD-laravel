<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeederTablaCliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->crear('pepe');
        $this->crear('javier');
        $this->crear('jorge');
        $this->crear('maria');
        $this->crear('betsy');
    }

    private function crear($nombre){
        DB::table('clientes')->insert([
            'nombre' => $nombre,
            'email' => $nombre.'@'.$nombre.'.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
