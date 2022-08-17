<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{

    protected $table = 'plans';
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
