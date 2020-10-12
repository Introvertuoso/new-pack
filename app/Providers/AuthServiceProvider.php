<?php

namespace App\Providers;

use App\Models\Ability;
use App\Models\client;
use App\Models\Order;
use App\Models\product;
use App\Models\RawMaterial;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Gate::define('read-user', function (User $user) {
            return $user->role()->abilities()->get()->contains('name', null, 'read-user');
        });
        Gate::define('write-user', function (User $user, $model=null) {
            return $user->role()->abilities()->get()->contains('name', null, 'write-user');
        });


        Gate::define('read-client', function (User $user) {
            return $user->role()->abilities()->get()->contains('name', null, 'read-client');
        });
        Gate::define('write-client', function (User $user, $client=null) {
            return $user->role()->abilities()->get()->contains('name', null, 'write-client');
        });


        Gate::define('read-order', function (User $user) {
            return $user->role()->abilities()->get()->contains('name', null, 'read-order');
        });
        Gate::define('write-order', function (User $user, $order=null) {
            return $user->role()->abilities()->get()->contains('name', null, 'write-order');
        });


        Gate::define('read-product', function (User $user) {
            return $user->role()->abilities()->get()->contains('name', null, 'read-product');
        });
        Gate::define('write-product', function (User $user, $product=null) {
            return $user->role()->abilities()->get()->contains('name', null, 'write-product');
        });


        Gate::define('read-material', function (User $user) {
            return $user->role()->abilities()->get()->contains('name', null, 'read-material');
        });
        Gate::define('write-material', function (User $user, $material=null) {
            return $user->role()->abilities()->get()->contains('name', null, 'write-material');
        });

        Gate::define('read-role', function (User $user) {
            return $user->role()->abilities()->get()->contains('name', null, 'read-role');
        });
        Gate::define('write-role', function (User $user, $role=null) {
            return $user->role()->abilities()->get()->contains('name', null, 'write-role');
        });

        Gate::define('read-ability', function (User $user) {
            return $user->role()->abilities()->get()->contains('name', null, 'read-ability');
        });
        Gate::define('write-ability', function (User $user, $ability=null) {
            return $user->role()->abilities()->get()->contains('name', null, 'write-ability');
        });
    }
}
