<?php

namespace Database\Factories;

use App\Models\Horario;
use App\Models\SesionZoom;
use App\Models\ZoomUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class SesionZoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SesionZoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'zoom_id'=>$this->faker->numberBetween(600000,999999),
            'zoom_enlace'=>$this->faker->sentence(),
            'zoom_clave'=>$this->faker->sentence(),
            'moodle_id'=>$this->faker->numberBetween(1234,9999),
            'zoom_usuario_id'=>ZoomUsuario::all()->random(),
            'horario_id'=>Horario::all()->random()
        ];
    }
}
