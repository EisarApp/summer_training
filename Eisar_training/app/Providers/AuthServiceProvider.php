<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
            return $user->user_type == 'university';
        });

        Gate::define('company', function ($user) {
            return $user->user_type == 'company';
        });

        Gate::define('trainee', function ($user) {
            return $user->user_type == 'trainee';
        });

        Gate::define('academic', function ($user) {
            return $user->user_type == 'academic';
        });

        Gate::define('employee', function($user) {
            return $user->user_type == 'employee';
         });

         
    }
}
