<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Especie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Especie>
 */
class EspecieFactory extends Factory
{
    protected $model = Especie::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NombreCientifico' => $this->faker->name(),
            'NombreComun' => $this->faker->name(),
            'Clima' => $this->faker->name(),
            'RegionOrigen' => $this->faker->name(),
            'Crecimineto' => $this->faker->randomNumber(),
            'ImagenUrl' => $this->faker->url(),
            'Enlace' => $this->faker->url(),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
