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
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->name(),
            'ubicacion' => $this->faker->name(),
            'tipoEvento' => $this->faker->randomElement(['Reforestacion', 'Charla', 'Taller']),
            'tipoTerreno' => $this->faker->randomElement(['Urbano', 'Rural', 'Montaña', 'Playa']),
            'fecha' => $this->faker->dateTime(),
            'imagenUrl' => "./eventos/9yoKXX0Q4MSroo3XCPIZiBZAmVpYu6HQllYiyC1Q.png",
            'documentoUrl' => "./eventos/reforesta_full.pdf",
            'anfitrion_id' => Usuario::factory(),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
