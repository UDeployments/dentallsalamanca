<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert(['rol_name' => 'Administrador', 'created_at' => new DateTime()]);
        DB::table('rol')->insert(['rol_name' => 'Empleado', 'created_at' => new DateTime()]);
        DB::table('rol')->insert(['rol_name' => 'Cliente', 'created_at' => new DateTime()]);
    }
}
