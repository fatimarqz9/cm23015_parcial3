<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nombre"=>$this->faker->word(),
            "telefono"=>$this->faker->phoneNumber(),
            "idtipocliente"=>$this->faker->numberBetween(1,10),
            "iddepartamento"=>$this->faker->numberBetween(1,10)

        ];
    }
}
