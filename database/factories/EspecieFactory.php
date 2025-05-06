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
            'nombreCientifico' => $this->faker->name(),
            'nombreComun' => $this->faker->name(),
            'clima' => $this->faker->name(),
            'regionOrigen' => $this->faker->name(),
            'crecimiento' => $this->faker->randomNumber(),
            'imagenUrl' => "./especies/2zTsLTTUNPzTxvimDI3YRZ8jyERWQcfj7sGGuer8.png",
            'enlace' => $this->faker->url(),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
