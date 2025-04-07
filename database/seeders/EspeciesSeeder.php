<?php

namespace Database\Seeders;

use App\Models\Beneficio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especie;
use App\Models\Evento;
use App\Models\Usuario;
use Carbon\Carbon;

class EspeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Especie::factory(5)->hasAttached(Evento::factory()->count(4), ["cantidad" => 5], 'evento')
            ->hasAttached(Beneficio::factory()->count(4), [], 'beneficio')
            ->create();

        // Especie::create([
        //     'nombreCientifico' => 'Especie Teste',
        //     'nombreComun' => 'Nombre Comun Teste',
        //     'clima' => 'Clima Teste',
        //     'regionOrigen' => 'Region Origen Teste',
        //     'crecimiento' => 0,
        //     'imagenUrl' => 'https://www.google.com',
        //     'enlace' => 'https://www.google.com',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);
        // Especie::create([
        //     'nombreCientifico' => 'Especie Alpha3',
        //     'nombreComun' => 'Nombre Comun E',
        //     'clima' => 'Mediterráneo',
        //     'regionOrigen' => 'Asia',
        //     'crecimiento' => 3,
        //     'imagenUrl' => 'https://example.com/img1.jpg',
        //     'enlace' => 'https://example.com/info1',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Especie::create([
        //     'nombreCientifico' => 'Especie Delta',
        //     'nombreComun' => 'Nombre Comun C',
        //     'clima' => 'Húmedo',
        //     'regionOrigen' => 'Oceanía',
        //     'crecimiento' => 4,
        //     'imagenUrl' => 'https://example.com/img4.jpg',
        //     'enlace' => 'https://example.com/info5',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Especie::create([
        //     'nombreCientifico' => 'Especie Alpha2',
        //     'nombreComun' => 'Nombre Comun B',
        //     'clima' => 'Árido',
        //     'regionOrigen' => 'África',
        //     'crecimiento' => 2,
        //     'imagenUrl' => 'https://example.com/img4.jpg',
        //     'enlace' => 'https://example.com/info2',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Especie::create([
        //     'nombreCientifico' => 'Especie Beta3',
        //     'nombreComun' => 'Nombre Comun B',
        //     'clima' => 'Templado',
        //     'regionOrigen' => 'África',
        //     'crecimiento' => 1,
        //     'imagenUrl' => 'https://example.com/img3.jpg',
        //     'enlace' => 'https://example.com/info5',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Especie::create([
        //     'nombreCientifico' => 'Especie Alpha',
        //     'nombreComun' => 'Nombre Comun B',
        //     'clima' => 'Húmedo',
        //     'regionOrigen' => 'América del Sur',
        //     'crecimiento' => 3,
        //     'imagenUrl' => 'https://example.com/img2.jpg',
        //     'enlace' => 'https://example.com/info2',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);
    }
}
