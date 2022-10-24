<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Hotel::class;

    public function definition()
    {
        return [
            'name' => fake()->name(),
            'user_id' => User::all()->random()->id,
            'city_id'=> City::all()->random()->id,
        ];
    }
}
