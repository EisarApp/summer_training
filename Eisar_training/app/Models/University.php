<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model
{

    protected $guarded = ['id'];

    protected $table = 'universites';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function universityCrew()
    {
        return $this->hasMany(User::class, 'university_id', 'id');
    }
}
