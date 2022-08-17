<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingRequest extends Model
{

    protected $table = 'training_requests';
    public $timestamps = true;

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function trainee()
    {
        $this->belongsTo('Users', 'user_id');
    }

    public function createBy()
    {
        $this->belongsTo('Users', 'created_by');
    }
}
