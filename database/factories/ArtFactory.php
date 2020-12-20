<?php

namespace Database\Factories;

use App\Models\Art;
use App\Models\Artist;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Art::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'code' => $this->faker->unique()->word,
            'price' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'size' => $this->faker->randomDigit ,
            'year' => $this->faker->numberBetween($min = 2018, $max = 2020) ,
            'media' => $this->faker->word ,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'artist_id'=>function(){
                return Artist::all()->random();
            },
            'category_id'=>function(){
                return Category::all()->random();
            }
        ];
    }
}