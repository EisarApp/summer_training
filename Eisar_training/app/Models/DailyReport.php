<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReport extends Model 
{

    protected $table = 'daily_reports';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}