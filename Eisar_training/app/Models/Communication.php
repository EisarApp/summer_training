<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Communication extends Model 
{

    protected $table = 'communications';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}