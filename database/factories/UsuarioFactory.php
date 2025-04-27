<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nick' => $this->faker->name(),
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            'karma' => $this->faker->randomNumber(),
            'suscrito' => $this->faker->boolean(),
            'imagenUrl' => "./usuarios/9yoKXX0Q4MSroo3XCPIZiBZAmVpYu6HQllYiyC1Q.png",
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
