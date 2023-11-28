<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\etiqueta;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\etiqueta>
 */
class etiquetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = etiqueta::class;
    public function definition(): array
    {
        return [
            'nombre_etiqueta'=>$this->faker->word
        ];
    }
}
