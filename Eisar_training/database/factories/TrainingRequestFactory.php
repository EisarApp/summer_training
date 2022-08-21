<?php

namespace Database\Factories;

use App\Models\Plan;
use App\Models\User;
use App\Models\UserTrainee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingRequest>
 */
class TrainingRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'created_by' => User::factory(),
            'status' => 'approved',
            'notes' => $this->faker->sentence,
            'plan_id' => Plan::factory(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
