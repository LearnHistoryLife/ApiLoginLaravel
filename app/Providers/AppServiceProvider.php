<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Passport\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Sanctum::usePersonalAccessTokenModel(App\PersonalAccessToken::class);
    }
}