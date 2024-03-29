<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model 
{

    protected $table = 'departments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}