<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
        /**
     * Define the model's default state.
     *
     * @var string, mixed>
     */

    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'ap_paterno' => $this->faker->sentence(),
            'ap_materno' => $this->faker->sentence(),
            'telefono' => $this->faker->numberBetween(),
            'email' => $this->faker->safeEmail(),
            'rfc' =>$this->faker->sentence(),
            'direccion' =>$this->faker->sentence(),
            'descripcion' =>$this->faker->text()
        ];
    }
}
