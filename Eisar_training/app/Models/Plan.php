<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{

    protected $table = 'plans';
    protected $fillable = [
        'name',
        'created_by',
        'supervisor_id',
        'company_id',
        'description',
        'department',
        'training_type',
        'training_method',
        'students_number',
        'starting_time',
        'students_number',
        'ending_date',
        'require_training_letter',
        'require_national_id'
    ];

    public $timestamps = true;
    protected $with = ['supervisedBy'];

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function createdBy()
    {
        $this->hasOne('User', 'created_by');
    }

    public function certificate()
    {
        $this->hasOne('Certificate', 'certificate_id');
    }

    public function supervisedBy()
    {
        return $this->belongsTo(UserEmployee::class, 'supervisor_id');
    }

    public function company(){
        return $this->belongsTo(UserCompany::class, 'company_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query
                ->where('name', 'like', '%' . $search . '%')
                );
    }

}
