<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especie;
use App\Models\Usuario;
use Carbon\Carbon;

class EspeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Especie::factory(5)->create();
        //
        // Especie::create([
        //     'NombreCientifico' => 'Especie Teste',
        //     'NombreComun' => 'Nombre Comun Teste',
        //     'Clima' => 'Clima Teste',
        //     'RegionOrigen' => 'Region Origen Teste',
        //     'Crecimineto' => 0,
        //     'ImagenUrl' => 'https://www.google.com',
        //     'Enlace' => 'https://www.google.com',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Especie::create([
        //     'NombreCientifico' => 'Especie Teste 2',
        //     'NombreComun' => 'Nombre Comun Teste 2',
        //     'Clima' => 'Clima Teste 2',
        //     'RegionOrigen' => 'Region Origen Teste 2',
        //     'Crecimineto' => 0,
        //     'ImagenUrl' => 'https://www.google.com',
        //     'Enlace' => 'https://www.google.com',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Especie::create([
        //     'NombreCientifico' => 'Especie Teste 3',
        //     'NombreComun' => 'Nombre Comun Teste 3',
        //     'Clima' => 'Clima Teste 3',
        //     'RegionOrigen' => 'Region Origen Teste 3',
        //     'Crecimineto' => 0,
        //     'ImagenUrl' => 'https://www.google.com',
        //     'Enlace' => 'https://www.google.com',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Especie::create([
        //     'NombreCientifico' => 'Especie Teste 4',
        //     'NombreComun' => 'Nombre Comun Teste 4',
        //     'Clima' => 'Clima Teste 4',
        //     'RegionOrigen' => 'Region Origen Teste 4',
        //     'Crecimineto' => 0,
        //     'ImagenUrl' => 'https://www.google.com',
        //     'Enlace' => 'https://www.google.com',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);

        // Especie::create([
        //     'NombreCientifico' => 'Especie Teste 5',
        //     'NombreComun' => 'Nombre Comun Teste 5',
        //     'Clima' => 'Clima Teste 5',
        //     'RegionOrigen' => 'Region Origen Teste 5',
        //     'Crecimineto' => 0,
        //     'ImagenUrl' => 'https://www.google.com',
        //     'Enlace' => 'https://www.google.com',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now(),
        // ]);
    }
}
