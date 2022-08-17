<?php

namespace Database\Factories;

use App\Models\User;
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
            'id'=>1,
            'name'=>fake()->name(),
            'created_by'=>User::factory(),
            // 'supervisor_id'=>,
            // 'company_id'=>User::factory(),
            'company_id'=>1,
            'department'=>'mangmente',
            'job_title'=>'trainer',
            'nationality'=>'saudi',
            'birth_date'=>fake()->date(),
            'qualification'=>fake()->sentence(),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
