<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCompany extends Model 
{

    protected $table = 'user_companies';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}