<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserEmployee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
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
            'name' => fake()->name(),
            'created_by' => UserEmployee::factory(),
            'supervisor_id' => UserEmployee::factory(),
            'company_id' => 5,
            'description' => $this->faker->paragraph,
            'department' => 'management',
            'training_type' => 'summer',
            'training_method' => 'remote',
            'students_number' => 40,
            'starting_time' => $this->faker->dateTime(),
            'ending_date' => $this->faker->dateTime(),
            'require_training_letter' => 0,
            'require_national_id' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
