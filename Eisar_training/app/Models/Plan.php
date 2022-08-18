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

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function createdBy()
    {
        $this->hasOne('Users', 'created_by');
    }
    public function supervisedBy()
    {
        $this->hasOne('Users', 'supervisor_id');
    }
    public function certificate()
    {
        $this->hasOne('Certificate', 'certificate_id');
    }
}
