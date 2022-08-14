<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model 
{

    protected $table = 'sections';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}