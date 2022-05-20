<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeederTablaPedido extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->crear(1,1,5,100);
        $this->crear(1,2,3,100);
        $this->crear(1,3,7,100);

        $this->crear(2,1,5,100);
        $this->crear(2,6,10,100);

        $this->crear(3,8,2,100);
        $this->crear(3,8,2,100);

        $this->crear(4,1,100,100);
        $this->crear(4,2,100,100);
        $this->crear(4,3,100,100);
        $this->crear(4,4,100,100);
        $this->crear(4,5,100,100);
        $this->crear(4,6,100,100);
        $this->crear(4,7,100,100);
        $this->crear(4,8,100,100);
        $this->crear(4,9,100,100);
    }

    private function crear($cliente, $producto, $cantidad, $total){
        DB::table('pedidos')->insert([
            'cliente_id' => $cliente,
            'producto_id' => $producto,
            'cantidad' => $cantidad,
            'total' => $total,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
