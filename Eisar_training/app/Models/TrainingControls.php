<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingControls extends Model 
{

    protected $table = 'training_controls';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}