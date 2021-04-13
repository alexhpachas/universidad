<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres'=>$this->faker->name(),
            'apellidos'=>$this->faker->sentence(),
            'dni'=>$this->faker->numberBetween(12345678,23456789),   
            'fecha_nacimiento'=>$this->faker->date('Y-m-d'),        
            'email'=>$this->faker->freeEmail,
            'genero'=>$this->faker->randomElement(['Masculino','Femenino'])   ,
            'estado'=>$this->faker->randomElement([1,2])         
        ];
    }
}
