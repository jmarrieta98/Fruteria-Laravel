<?php

namespace Database\Factories;

use App\Models\Fruta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FrutaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fruta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'nombre' => $name,
            'slug' => Str::slug($name,'_'),
            'descripcion' => $this->faker->paragraph(),
            'precio' => $this->faker->numberBetween(0,100),
            'fecha' => $this->faker->date()
        ];
    }
}
