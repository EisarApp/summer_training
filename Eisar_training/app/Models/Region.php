<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model 
{

    protected $guarded = ['id'];
    protected $table = 'regions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function residents()
    {
        return $this->hasMany(User::class, 'region_id','id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'city_id','id');
    }
}