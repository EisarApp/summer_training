<?php

namespace App\Models;

use App\Models\University;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserAcademic extends Model
{

    protected $guarded = ['id'];


    protected $table = 'user_academics';
    public $timestamps = true;

    use SoftDeletes;
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