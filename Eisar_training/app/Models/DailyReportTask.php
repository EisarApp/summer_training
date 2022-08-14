<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReportTask extends Model 
{

    protected $table = 'daily_reports_tasks';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}