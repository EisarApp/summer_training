<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCompany extends Model
{
    protected $guarded = ['id'];

    protected $table = 'user_companies';
    public $timestamps = true;
    protected $with = ['information', 'city'];

    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function information()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function region()
    {
        $this->belongsTo(Region::class, 'region_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function employees()
    {
        return $this->hasMany(UserEmployee::class, 'company_id', 'id');
    }

    public function plans()
    {
        return $this->hasMany(Plan::class, 'company_id', 'id');
    }

    public function scopeFilter($query, array $filters)
    {

        $query->when(
            $filters['city'] ?? false,
            fn ($query, $city) =>

            $query->whereHas(
                'city',
                fn ($query) =>
                $query->where('name', $city)

            )
        );
    }
}
