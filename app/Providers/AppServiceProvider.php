<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function(User $user){
            return $user->role =='admin';
        });
        Gate::define('desa', function(User $user){
            return $user->role =='desa';
        });
        Gate::define('pegawai', function(User $user){
            return $user->role =='pegawai';
        });
        Paginator::useBootstrapFive();
    }

}
