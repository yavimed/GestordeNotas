<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\nota;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\nota>
 */
class notaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = nota::class;
    public function definition(): array
    {
        return [
            'titulo'=>$this->faker->word,
            'descripcion'=>$this->faker->sentence,
            'feche_creacion'=>now()
        ];
    }
}
