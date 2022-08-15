<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model 
{

    protected $table = 'tasks';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}