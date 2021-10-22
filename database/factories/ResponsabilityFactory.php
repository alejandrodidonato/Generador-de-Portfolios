<?php

namespace Database\Factories;

use App\Models\Responsability;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponsabilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Responsability::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence,
            'work_id' => rand(1,15),
        ];
    }
}
