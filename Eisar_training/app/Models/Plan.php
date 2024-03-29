<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model 
{

    protected $table = 'plans';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}