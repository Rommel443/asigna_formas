<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Policies\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         //'App\Model' => 'App\Policies\ModelPolicy',
         User::class => UserPolicy::class,
         Position::class => PositionPolicy::class,
         Period::class => PeriodPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('haveaccess', function (User $user, $perm){
            //dd($perm);
            return $user->havePermission($perm);
            //return $perm;
        });

        /*Gate::define('haveaccessp', function (Position $position, $perm){
            //dd($perm);
            return $position->havePermission($perm);
            //return $perm;
        });*/
    }
}
