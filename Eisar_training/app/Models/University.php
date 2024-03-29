<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model 
{

    protected $table = 'universites';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}