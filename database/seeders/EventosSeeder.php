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
        Evento::factory()
            ->count(5)
            ->has(Usuario::factory()->count(2), 'usuarioCrea')
            ->hasAttached(Usuario::factory()->count(2), [], 'usuarioParticipante')
            ->create();

        // ->hasAttached(Especie::factory()->count(3), ["cantidad" => 5], 'especie')


        // Evento::create([
        //     'nombre' => 'Evento Teste',
        //     'descripcion' => 'Descripcion Teste',
        //     'ubicacion' => 'Ubicacion Teste',
        //     'tipoEvento' => 'Reforestacion',
        //     'tipoTerreno' => 'Urbano',
        //     'fecha' => '2021-10-10',
        //     'imagenUrl' => 'https://www.google.com',
        //     'anfitrion_id' => 1,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Evento::create([
        //     'nombre' => 'Evento Gamma',
        //     'descripcion' => 'Descripción E',
        //     'ubicacion' => 'Ciudad de México',
        //     'tipoEvento' => 'Reforestacion',
        //     'tipoTerreno' => 'Urbano',
        //     'fecha' => '2022-11-30',
        //     'imagenUrl' => 'https://example.com/event4.jpg',
        //     'anfitrion_id' => 1,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Evento::create([
        //     'nombre' => 'Evento Beta',
        //     'descripcion' => 'Descripción B',
        //     'ubicacion' => 'Madrid',
        //     'tipoEvento' => 'Reforestación',
        //     'tipoTerreno' => 'Urbano',
        //     'fecha' => '2024-06-20',
        //     'imagenUrl' => 'https://example.com/event4.jpg',
        //     'anfitrion_id' => 2,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Evento::create([
        //     'nombre' => 'Evento Epsilon',
        //     'descripcion' => 'Descripción D',
        //     'ubicacion' => 'Ciudad de México',
        //     'tipoEvento' => 'Reforestacion',
        //     'tipoTerreno' => 'Urbano',
        //     'fecha' => '2023-05-15',
        //     'imagenUrl' => 'https://example.com/event2.jpg',
        //     'anfitrion_id' => 3,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Evento::create([
        //     'nombre' => 'Evento Beta3',
        //     'descripcion' => 'Descripción A',
        //     'ubicacion' => 'Barcelona',
        //     'tipoEvento' => 'Reforestacion',
        //     'tipoTerreno' => 'Urbano',
        //     'fecha' => '2025-03-10',
        //     'imagenUrl' => 'https://example.com/event2.jpg',
        //     'anfitrion_id' => 2,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Evento::create([
        //     'nombre' => 'Evento Beta4',
        //     'descripcion' => 'Descripción E',
        //     'ubicacion' => 'Ciudad de México',
        //     'tipoEvento' => 'Reforestacion',
        //     'tipoTerreno' => 'Urbano',
        //     'fecha' => '2021-12-01',
        //     'imagenUrl' => 'https://example.com/event2.jpg',
        //     'anfitrion_id' => 2,
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);
    }
}
