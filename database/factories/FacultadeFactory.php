<?php

namespace Database\Factories;

use App\Models\Entidade;
use App\Models\Facultade;
use Illuminate\Database\Eloquent\Factories\Factory;



class FacultadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facultade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'codigo'=>$this->faker->sentence(),
            'abreviatura'=>$this->faker->word(5),
            'estado'=>$this->faker->randomElement([1,2]),
            'entidade_id'=>Entidade::all()->random()->id
        ];
    }
}
