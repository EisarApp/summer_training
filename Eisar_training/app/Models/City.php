<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{

    protected $guarded = ['id', 'region_id'];

    protected $table = 'cities';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function residents()
    {
        return $this->hasMany(User::class, 'city_id', 'id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
