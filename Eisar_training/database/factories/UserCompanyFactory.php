<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserCompany>
 */
class UserCompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => 1,
            'user_id' => User::factory(),
            'header' => fake()->sentence(),
            'description' => fake()->sentence(),
            'domain' => fake()->sentence(),
            'city_id' => 1,
            'region_id' => 1,
            'facility_size' => 12,
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
