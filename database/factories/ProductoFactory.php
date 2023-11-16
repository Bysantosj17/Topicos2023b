<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ProductoFactory extends Factory
{
        /**
     * Define the model's default state.
     *
     * @var string, mixed>
     */

    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(),
            'categoria' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 10, 1000),
            'descripcion' =>$this->faker->sentence(),
            'fecha_caducidad' => $this->faker->dateTimeThisDecade(),
            'codigo_barras' =>$this->faker->numberBetween(1, 1000)
        ];
    }
}
