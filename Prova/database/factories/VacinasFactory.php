<?php

namespace Database\Factories;

use App\Models\Vacinas;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacinasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacinas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->randomElement(['CoronaVac', 'AstraZeneca', 'Pfizer', 'Janssen']),
            'fabricante' => $this->faker->randomElement(['Sinovac', 'Oxford', 'Janssen', 'Pfizer']),
            'doses' => $this->faker->randomElement(['1', '2'])
        ];
    }
}
