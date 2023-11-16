<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ProveedorFactory extends Factory
{
        /**
     * Define the model's default state.
     *
     * @var string, mixed>
     */

    protected $model = Proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => $this->faker->sentence(),
            'ap_paterno' => $this->faker->sentence(),
            'ap_materno' => $this->faker->sentence(),
            'telefono' => $this->faker->numberBetween(),
            'email' => $this->faker->safeEmail(),
            'compania' =>$this->faker->sentence(),
            'direccion' =>$this->faker->sentence(),
            'descripcion' =>$this->faker->text()
        ];
    }
}
