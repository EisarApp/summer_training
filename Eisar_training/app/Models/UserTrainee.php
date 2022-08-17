<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserTrainee extends Model
{

    protected $table = 'user_trainees';
    public $timestamps = true;

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    //users to user_trainee
    public function inforamtion()
    {
        $this->hasOne('Users', 'user_id');
    }

    public function region()
    {
        $this->hasOne('Region', 'region_id');
    }

    public function city()
    {
        $this->hasOne('City', 'city_id');
    }

    public function university()
    {
        $this->hasOne('University', 'university_id');
    }

    public function department()
    {
        $this->hasOne('Department', 'department_id');
    }

    public function trainingRequests()
    {
        $this->hasMany(TrainingRequest::class);
    }
}
