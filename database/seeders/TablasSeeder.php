<?php

namespace Database\Seeders;

use App\Models\Beneficio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Beneficio::factory(5)->create();
        //
        // DB::table('participantes')->insert([
        //     'usuarios_id' => 1,
        //     'eventos_id' => 1
        // ]);

        // DB::table('participantes')->insert([
        //     'usuarios_id' => 2,
        //     'eventos_id' => 1
        // ]);
        // DB::table('participantes')->insert([
        //     'usuarios_id' => 3,
        //     'eventos_id' => 1
        // ]);

        // DB::table('participantes')->insert([
        //     'usuarios_id' => 1,
        //     'eventos_id' => 2
        // ]);

        // DB::table('participantes')->insert([
        //     'usuarios_id' => 2,
        //     'eventos_id' => 2
        // ]);

        // DB::table('participantes')->insert([
        //     'usuarios_id' => 3,
        //     'eventos_id' => 2
        // ]);

        // DB::table('participantes')->insert([
        //     'usuarios_id' => 1,
        //     'eventos_id' => 3
        // ]);

        // DB::table('eventos_especies')->insert([
        //     'eventos_id' => 1,
        //     'especies_id' => 1,
        //     'cantidad' => 10
        // ]);

        // DB::table('eventos_especies')->insert([
        //     'eventos_id' => 2,
        //     'especies_id' => 2,
        //     'cantidad' => 10
        // ]);

        // DB::table('eventos_especies')->insert([
        //     'eventos_id' => 3,
        //     'especies_id' => 3,
        //     'cantidad' => 10
        // ]);

        // DB::table('eventos_especies')->insert([
        //     'eventos_id' => 1,
        //     'especies_id' => 2,
        //     'cantidad' => 10
        // ]);

        // DB::table('eventos_especies')->insert([
        //     'eventos_id' => 2,
        //     'especies_id' => 3,
        //     'cantidad' => 10
        // ]);

        // DB::table('beneficios')->insert([
        //     'descripcion' => 'Beneficio 1'
        // ]);

        // DB::table('beneficios')->insert([
        //     'descripcion' => 'Beneficio 2'
        // ]);

        // DB::table('beneficios')->insert([
        //     'descripcion' => 'Beneficio 3'
        // ]);

        // DB::table('beneficios_especies')->insert([
        //     'beneficio_id' => 1,
        //     'especies_id' => 1
        // ]);

        // DB::table('beneficios_especies')->insert([
        //     'beneficio_id' => 2,
        //     'especies_id' => 2
        // ]);

        // DB::table('beneficios_especies')->insert([
        //     'beneficio_id' => 3,
        //     'especies_id' => 3
        // ]);
    }
}
