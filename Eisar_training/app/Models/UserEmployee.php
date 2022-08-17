<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserEmployee extends Model 
{

    protected $table = 'user_employees';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}