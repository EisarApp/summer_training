<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserTrainee>
 */
class UserTraineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'region_id'=>1,
            'city_id'=>1,
            'university_id'=>1,
            'department_id'=>1,
            'major'=>'it',
            'student_number'=>4333,
            'gpa'=>4.0,
            'gpa_type'=>'4',
            'training_date'=>'firstsemester',
            'academic_degree'=>'bachelor',
            'academic_transaction'=>fake()->name(),
            'cv'=>fake()->sentence(),
            'is_graduate'=>0,
            'created_at'=>now(),
            'updated_at'=>now(),
            
        ];
    }
}
