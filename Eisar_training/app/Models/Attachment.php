<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model 
{

    protected $table = 'attachments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}