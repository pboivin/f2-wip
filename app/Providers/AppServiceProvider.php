<?php

namespace App\Providers;

use App\Filament\Filters\DeferredSelectFilter;
use App\Filament\Filters\DeferredTernaryFilter;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // **Uncomment this to replace all Select and Ternary filters globally**

        // $this->app->bind(SelectFilter::class, DeferredSelectFilter::class);
        // $this->app->bind(TernaryFilter::class, DeferredTernaryFilter::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::registerScripts([
            asset('js/admin.js'),
        ]);

        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()->label('Site'),
                NavigationGroup::make()->label('Contact'),
            ]);
        });

        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
