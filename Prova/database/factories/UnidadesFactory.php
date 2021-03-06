<?php

namespace Database\Factories;

use App\Models\Unidades;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnidadesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Unidades::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->randomElement(['Hospital Albert Einstein', 'Hospital Sírio-Libanês', 'Hospital Oswaldo Cruz', 'Hospital das Clínicas']),
            'bairro' => $this->faker->streetAddress,
            'cidade' => $this->faker->city
        ];
    }
}
