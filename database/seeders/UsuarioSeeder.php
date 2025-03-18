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

        Usuario::factory(1)->create();

        // Usuario::factory()
        //     ->count(5)
        //     ->has(Evento::factory()->count(3), 'eventoCrea')
        //     ->create();
        // Usuario::create([
        //     'nick' => 'Usuario 1',
        //     'nombre' => 'Nombre 1',
        //     'apellidos' => 'Apellidos 1',
        //     'email' => 'Email 1',
        //     'password' => 'Password 1',
        //     'karma' => 0,
        //     'suscrito' => false,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // Usuario::create([
        //     'nick' => 'UsuarioA',
        //     'nombre' => 'Pedro',
        //     'apellidos' => 'Fernández',
        //     'email' => 'usuarioA@example.com',
        //     'password' => 'PasswordE',
        //     'karma' => 30,
        //     'suscrito' => true,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // Usuario::create([
        //     'nick' => 'UsuarioB',
        //     'nombre' => 'Ana',
        //     'apellidos' => 'Martínez',
        //     'email' => 'usuarioA32@example.com',
        //     'password' => 'PasswordD',
        //     'karma' => 10,
        //     'suscrito' => false,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // Usuario::create([
        //     'nick' => 'UsuarioC',
        //     'nombre' => 'Ana',
        //     'apellidos' => 'Martínez',
        //     'email' => 'usuarioD@example.com',
        //     'password' => 'PasswordB',
        //     'karma' => 10,
        //     'suscrito' => true,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // Usuario::create([
        //     'nick' => 'UsuarioD',
        //     'nombre' => 'María',
        //     'apellidos' => 'González',
        //     'email' => 'usuarioA3@example.com',
        //     'password' => 'PasswordB',
        //     'karma' => 20,
        //     'suscrito' => true,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // Usuario::create([
        //     'nick' => 'UsuarioC3',
        //     'nombre' => 'María',
        //     'apellidos' => 'López',
        //     'email' => 'usuarioE@example.com',
        //     'password' => 'PasswordD',
        //     'karma' => 40,
        //     'suscrito' => true,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
