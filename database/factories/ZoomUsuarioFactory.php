<?php

namespace Database\Factories;

use App\Models\ZoomUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZoomUsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ZoomUsuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $usuario = $this->faker->unique()->word(5);
        return [
            'usuario'=>$usuario,
            'password'=>$this->faker->word(6),
            'estado'=>$this->faker->randomElement([1,2])
        ];
    }
}
