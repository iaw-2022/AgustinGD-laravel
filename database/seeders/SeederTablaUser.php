<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Rol;

class SeederTablaUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'administrador@administrador.com',
            'password' => bcrypt('123'),
            'rol_id' => Rol::IS_ADMIN,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Editor',
            'email' => 'editor@editor.com',
            'password' => bcrypt('123'),
            'rol_id' => Rol::IS_EDITOR,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Actualizador',
            'email' => 'actualizador@actualizador.com',
            'password' => bcrypt('123'),
            'rol_id' => Rol::IS_ACTUALIZADOR,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('123'),
            'rol_id' => Rol::IS_USER,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);        

        DB::table('users')->insert([
            'name' => 'Ventas',
            'email' => 'ventas@ventas.com',
            'password' => bcrypt('123'),
            'rol_id' => Rol::IS_VENDEDOR,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
