<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserEmployee extends Model
{

    protected $table = 'user_employees';
    public $timestamps = true;

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    //users to user_trainee
    public function inforamtion()
    {
        $this->hasOne('Users', 'user_id');
    }
}