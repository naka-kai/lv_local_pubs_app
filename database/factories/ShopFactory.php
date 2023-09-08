<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $address = $this->faker->jpAddressArray();

        return [
            'name' => $this->faker->name(),
            'postcode' => $address['postcode'],
            'prefecture' => $address['prefecture'],
            'city' => $address['city'],
            'street' => $address['streetAddress'],
            'tel' => $this->faker->phoneNumber(),
            'sns' => $this->faker->url(),
        ];
    }
}
