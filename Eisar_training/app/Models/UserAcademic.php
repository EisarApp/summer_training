<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAcademic extends Model 
{

    protected $guarded = ['id', 'user_id'];


    protected $table = 'user_academics';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}