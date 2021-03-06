<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SeederTablaRol::class);
        $this->call(SeederTablaUser::class);
        $this->call(SeederTablaCategoria::class);
        $this->call(SeederTablaProducto::class);
        $this->call(SeederTablaCliente::class);
        $this->call(SeederTablaPedido::class);
    }
}
