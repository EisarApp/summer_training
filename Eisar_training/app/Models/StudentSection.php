<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentSection extends Model 
{

    protected $table = 'students_sections';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}