<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Evento;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    protected $model = Evento::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->name(),
            'Descripcion' => $this->faker->name(),
            'Ubicacion' => $this->faker->name(),
            'TipoEvento' => $this->faker->randomElement(['Reforestacion', 'Charla', 'Taller']),
            'TipoTerreno' => $this->faker->randomElement(['Urbano', 'Rural', 'Montaña', 'Playa']),
            'Fecha' => $this->faker->dateTime(),
            'ImagenUrl' => $this->faker->url(),
            'anfitrion_id' => Usuario::factory(),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
