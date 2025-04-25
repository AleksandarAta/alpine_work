<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $user_id = User::all()->pluck('id')->toArray();


        return [
            'user_id' => array_rand($user_id),
            'orders' => $this->faker->numberBetween(1000,7000),
            'created_at' => $this->faker->dateTimeBetween('-5 years', 'now' , null),
        ];
    }
}
