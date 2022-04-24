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
        $nuevoPedido = $this->crear(1,1,5);
            $this->agregarProductoAPedido($nuevoPedido,2,3);
            $this->agregarProductoAPedido($nuevoPedido,3,7);

        $this->crear(2,1,5);
        $this->crear(2,6,10);

        $this->crear(3,8,2);
        $this->crear(3,8,2);

        $nuevoPedido = $this->crear(4,1,100);
            $this->agregarProductoAPedido($nuevoPedido,2,100);
            $this->agregarProductoAPedido($nuevoPedido,3,100);
            $this->agregarProductoAPedido($nuevoPedido,4,100);
            $this->agregarProductoAPedido($nuevoPedido,5,100);
            $this->agregarProductoAPedido($nuevoPedido,6,100);
            $this->agregarProductoAPedido($nuevoPedido,7,100);
            $this->agregarProductoAPedido($nuevoPedido,8,100);
            $this->agregarProductoAPedido($nuevoPedido,9,100);
    }

    private function crear($cliente, $producto, $cantidad){
        $pedido = DB::table('pedidos')->insertGetId([
            'cliente_id' => $cliente,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $this->agregarProductoAPedido($pedido, $producto, $cantidad);
        return $pedido;
    }

    private function agregarProductoAPedido($pedido, $producto, $cantidad){
        $pedido_id = DB::table('pedido_productos')->insertGetId([
            'pedido_id' => $pedido,
            'producto_id' => $producto,
            'cantidad' => $cantidad
        ]);

        
    }
}
