<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //

        /* define a admin user role */
        Gate::define('university', function ($user) {
            return $user->type_id == 2;
        });

        Gate::define('company', function ($user) {
            return $user->type_id == 3;
        });

        Gate::define('trainee', function ($user) {
            return $user->type_id == 1;
        });

        Gate::define('academic', function ($user) {
            return $user->type_id == 0;
        });

        Gate::define('employee', function ($user) {
            return $user->type_id == 0;
        });
    }
}
