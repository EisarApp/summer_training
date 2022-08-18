<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCompany extends Model
{

    protected $table = 'user_companies';
    public $timestamps = true;

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    //users to user_trainee
    public function inforamtion()
    {
        return $this->hasOne(User::class, 'id');
    }

    public function region()
    {
        $this->hasOne('Region', 'region_id');
    }

    public function city()
    {
        return $this->hasOne(City::class, 'id');
    }
}
