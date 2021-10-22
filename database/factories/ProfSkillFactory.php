<?php

namespace Database\Factories;

use App\Models\ProfSkill;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfSkill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,5),
            'name' => $this->faker->word,
            'percent' => rand(1,100),
        ];
    }
}
