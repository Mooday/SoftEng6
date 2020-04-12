<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Gates para Admin

        Gate::define('manage-users', function($user){
            return $user->hasAnyRoles(['admin', 'coordinador']);
        });

        Gate::define('edit-users', function($user){
           return $user->hasRole('admin');
        });

        Gate::define('delete-users', function($user){
            return $user->hasRole('admin');
        });

        //Gates para Coordinador

        Gate::define('is-coordinador', function($user){
            return $user->hasRole('coordinador');
        });

        //Gates para Users

        Gate::define('is-user', function($user){
            return $user->hasRole('user');
        });

    }
}
