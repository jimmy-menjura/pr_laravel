<?php

namespace Database\Factories;

use App\Models\autores;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = autores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'autor' => $this->faker->name,
        ];
    }
}
