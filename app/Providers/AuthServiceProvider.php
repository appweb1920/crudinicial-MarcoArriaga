<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($user) {
            return $user->tipo == 1;
         });
        
         Gate::define('isLector', function($user) {
             return $user->tipo == 2;
         });
       
    }
}
