<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{

    protected $table = 'users';
    public $timestamps = true;

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function type()
    {
        return $this->hasOne('User', 'type_id', 'id');
    }

    public function userEmployee()
    {
        return $this->hasOne(UserEmployee::class, 'user_id', 'id');
    }
    public function userAcademic()
    {
        return $this->hasOne(UserAcademic::class, 'user_id', 'id');
    }
    public function userCompany()
    {
        return $this->hasOne(UserCompany::class, 'user_id', 'id');
    }
    public function userTrainee()
    {
        return $this->hasOne(UserTrainee::class, 'user_id', 'id');
    }
}
