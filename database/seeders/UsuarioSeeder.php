<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Carbon\Carbon;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Usuario::factory(10)->create();

        // Usuario::factory()
        //     ->count(5)
        //     ->has(Evento::factory()->count(3), 'eventoCrea')
        //     ->create();
        // Usuario::create([
        //     'Nick' => 'Usuario 1',
        //     'Nombre' => 'Nombre 1',
        //     'Apellidos' => 'Apellidos 1',
        //     'Email' => 'Email 1',
        //     'Password' => 'Password 1',
        //     'Karma' => 0,
        //     'suscrito' => false,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // Usuario::create([

        //     'Nick' => 'Usuario 2',
        //     'Nombre' => 'Nombre 2',
        //     'Apellidos' => 'Apellidos 2',
        //     'Email' => 'Email 2',
        //     'Password' => 'Password 2',
        //     'Karma' => 0,
        //     'suscrito' => false,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // Usuario::create([
        //     'Nick' => 'Usuario 3',
        //     'Nombre' => 'Nombre 3',
        //     'Apellidos' => 'Apellidos 3',
        //     'Email' => 'Email 3',
        //     'Password' => 'Password 3',
        //     'Karma' => 0,
        //     'suscrito' => false,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // Usuario::create([
        //     'Nick' => 'Usuario 4',
        //     'Nombre' => 'Nombre 4',
        //     'Apellidos' => 'Apellidos 4',
        //     'Email' => 'Email 4',
        //     'Password' => 'Password 4',
        //     'Karma' => 0,
        //     'suscrito' => false,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // Usuario::create([
        //     'Nick' => 'Usuario 5',
        //     'Nombre' => 'Nombre 5',
        //     'Apellidos' => 'Apellidos 5',
        //     'Email' => 'Email 5',
        //     'Password' => 'Password 5',
        //     'Karma' => 0,
        //     'suscrito' => false,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
