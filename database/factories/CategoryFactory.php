<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namecategory' => $this->faker->randomElement(['Undangan', 'Izin','Pernyataan','Kantoran']),
            'description' => $this->faker->paragraph(2, true)
        ];
    }
}
