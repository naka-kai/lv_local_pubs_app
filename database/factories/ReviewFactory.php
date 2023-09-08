<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'shop_id' => Shop::factory(),
            'image_id' => Image::factory(),
            'star' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->realText(),
            'number_people' => $this->faker->numberBetween(1, 30),
        ];
    }
}
