<?php

namespace App\Providers;

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

        Gate::define('are-superAdmin',function($user){
            return $user->hasRole('super_admin');
        });
        Gate::define('are-writer',function($user){
            return $user->hasRole('writer');
        });
        Gate::define('administrator',function($user){
            return $user->hasAnyRoles(['super_admin','writer']);
        });
    }
}
