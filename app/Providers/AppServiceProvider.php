<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Gate;
use App\Policies\NotificationPolicy;
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
        app()->singleton(\Faker\Generator::class, function () {
            return FakerFactory::create('en_IN');
        });
        Gate::policy(
            DatabaseNotification::class,
            NotificationPolicy::class
        );
    }
}
