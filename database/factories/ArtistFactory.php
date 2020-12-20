<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'designation' => $this->faker->word,
            'phone' => $this->faker->phoneNumber,
            'mail' => $this->faker->freeEmail,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
