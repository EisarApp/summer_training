<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model 
{

    protected $table = 'regions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}