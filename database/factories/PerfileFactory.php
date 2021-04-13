<?php

namespace Database\Factories;

use App\Models\Perfile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Perfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'biografia'=>$this->faker->word(500),
            'facebook'=>$this->faker->sentence(),
            'user_id'=>User::all()->random()->id
        ];
    }
}
