<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            'name' => $this->faker->name,
            'slug' => $this->faker->unique()->word,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'artist_id' => function(){
                return Artist::all()->random();
            }
        ];
    }
}