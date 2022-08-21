<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserEmployee>
 */
class UserEmployeeFactory extends Factory
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
            'company_id' => 5,
            'department' => 'management',
            'job_title' => 'trainer',
            'nationality' => 'saudi',
            'birth_date' => fake()->date(),
            'qualification' => fake()->sentence(),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
