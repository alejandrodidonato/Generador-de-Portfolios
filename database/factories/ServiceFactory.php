<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name_service' => $this->faker->word,
        'description_service' => $this->faker->text,
        'user_id' => rand(1,5),
        'icon'=> $this->faker->randomElement(['bullseye' ,'code', 'object-ungroup']),
        ];
    }
}
