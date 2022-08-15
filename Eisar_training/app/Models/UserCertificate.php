<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCertificate extends Model 
{

    protected $table = 'users_certificates';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}