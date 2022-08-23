<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{

    protected $guarded = ['id', 'is_active'];
    
    protected $table = 'users';
    public $timestamps = true;

    use SoftDeletes;
    use HasFactory;
    use HasApiTokens;

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
