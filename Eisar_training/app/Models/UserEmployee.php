<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserEmployee extends Model
{

    protected $with = ['information'];
    protected $table = 'user_employees';

    public $timestamps = true;

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function information()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function plans()
    {
        return $this->hasMany(Plan::class, 'supervisor_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(UserCompany::class, 'company_id');
    }
}
