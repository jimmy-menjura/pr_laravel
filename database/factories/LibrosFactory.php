<?php

namespace Database\Factories;

use App\Models\libros;
use App\Models\autores;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = libros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'autores_id' => autores::all()->random()->id
        ];
    }
}
