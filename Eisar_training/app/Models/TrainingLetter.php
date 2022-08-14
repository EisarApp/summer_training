<?php

namespace Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingLetter extends Model 
{

    protected $table = 'training_letters';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}