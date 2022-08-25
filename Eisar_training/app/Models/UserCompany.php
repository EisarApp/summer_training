<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class UserCompany extends Authenticatable
{
    protected $guarded = ['id'];
    protected $guard = ['company'];

    protected $table = 'user_companies';
    public $timestamps = true;
    protected $with = ['information', 'city', 'region', 'plans'];

    use SoftDeletes, Notifiable;
    use HasFactory;

    protected $dates = ['deleted_at'];

    public function information()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
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
            $filters['domain'] ?? false,
            fn ($query, $training_type) =>

            $query->where('domain', $training_type)

        );

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
