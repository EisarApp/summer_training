<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingRequest extends Model 
{

    protected $table = 'training_requests';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}