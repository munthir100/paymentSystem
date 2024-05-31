<?php

namespace App\Providers;

use App\Models\Marchant;
use App\Models\SubscriptionPlan;
use App\Models\SubscriptionPlanFeature;
use App\Observers\MarchantObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\SubscriptionPlanObserver;
use App\Observers\SubscriptionPlanFeatureObserver;

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
        Marchant::observe(MarchantObserver::class);
    }
}
