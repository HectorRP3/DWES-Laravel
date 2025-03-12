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
            'Nick' => $this->faker->name(),
            'Nombre' => $this->faker->name(),
            'Apellidos' => $this->faker->name(),
            'Email' => $this->faker->email(),
            'Password' => $this->faker->password(),
            'Karma' => $this->faker->randomNumber(),
            'suscrito' => $this->faker->boolean(),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
