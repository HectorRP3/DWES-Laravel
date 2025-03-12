<?php

namespace Database\Seeders;

use App\Models\Evento;
use App\Models\Especie;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Event;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evento::factory(10)
            ->count(5)
            ->has(Usuario::factory()->count(3), 'usuarioCrea')
            ->hasAttached(Usuario::factory()->count(3), [], 'usuarioParticipante')
            ->hasAttached(Especie::factory()->count(3), ["cantidad" => 5], 'especie')
            ->create();


        //
        // Evento::create([
        //     'Nombre' => 'Evento Teste',
        //     'Descripcion' => 'Descripcion Teste',
        //     'Ubicacion' => 'Ubicacion Teste',
        //     'TipoEvento' => 'Reforestacion',
        //     'TipoTerreno' => 'Urbano',
        //     'Fecha' => '2021-10-10',
        //     'ImagenUrl' => 'https://www.google.com',
        //     'anfitrion_id' => 1,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);
        // Evento::create([
        //     'Nombre' => 'Evento Teste',
        //     'Descripcion' => 'Descripcion Teste',
        //     'Ubicacion' => 'Ubicacion Teste',
        //     'TipoEvento' => 'Reforestacion',
        //     'TipoTerreno' => 'Urbano',
        //     'Fecha' => '2021-10-10',
        //     'ImagenUrl' => 'https://www.google.com',
        //     'anfitrion_id' => 2,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Evento::create([
        //     'Nombre' => 'Evento Teste',
        //     'Descripcion' => 'Descripcion Teste',
        //     'Ubicacion' => 'Ubicacion Teste',
        //     'TipoEvento' => 'Reforestacion',
        //     'TipoTerreno' => 'Urbano',
        //     'Fecha' => '2021-10-10',
        //     'ImagenUrl' => 'https://www.google.com',
        //     'anfitrion_id' => 3,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Evento::create([
        //     'Nombre' => 'Evento Teste',
        //     'Descripcion' => 'Descripcion Teste',
        //     'Ubicacion' => 'Ubicacion Teste',
        //     'TipoEvento' => 'Reforestacion',
        //     'TipoTerreno' => 'Urbano',
        //     'Fecha' => '2021-10-10',
        //     'ImagenUrl' => 'https://www.google.com',
        //     'anfitrion_id' => 4,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Evento::create([
        //     'Nombre' => 'Evento Teste',
        //     'Descripcion' => 'Descripcion Teste',
        //     'Ubicacion' => 'Ubicacion Teste',
        //     'TipoEvento' => 'Reforestacion',
        //     'TipoTerreno' => 'Urbano',
        //     'Fecha' => '2021-10-10',
        //     'ImagenUrl' => 'https://www.google.com',
        //     'anfitrion_id' => 5,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);
    }
}
