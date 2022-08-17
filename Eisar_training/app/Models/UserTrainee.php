<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserTrainee extends Model 
{

    protected $table = 'user_trainees';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}