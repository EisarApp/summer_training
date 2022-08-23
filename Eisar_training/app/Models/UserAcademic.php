<?php

namespace App\Models;

use App\Models\University;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class UserAcademic extends Authenticatable
{

    protected $guarded = ['id'];
    protected $guard = ['academic'];

    protected $table = 'user_academics';
    public $timestamps = true;

    use SoftDeletes, Notifiable;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function information()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
