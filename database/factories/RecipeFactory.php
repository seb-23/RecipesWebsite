<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'ingredients' => $this->faker->paragraph,
            'instructions' => $this->faker->paragraph,
            'notes' => $this->faker->paragraph,
            'img_url' => $this->faker->imageUrl(240, 180, 'food'),
        ];
    }
}