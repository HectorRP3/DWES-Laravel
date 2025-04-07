<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Beneficio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beneficio>
 */
class BeneficioFactory extends Factory
{
    protected $model = Beneficio::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
