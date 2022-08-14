<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinalRepport extends Model 
{

    protected $table = 'final_reports';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}