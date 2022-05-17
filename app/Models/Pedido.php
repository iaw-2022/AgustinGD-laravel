<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PedidoProducto;

class Pedido extends Model
{
    use HasFactory;

    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
