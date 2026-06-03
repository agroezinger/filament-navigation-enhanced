<?php

namespace Agroezinger\FilamentNavigationEnhanced;

use Illuminate\Support\ServiceProvider;

class NavigationEnhancedServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../resources/views/components/sidebar/item.blade.php'
                => resource_path('views/vendor/filament-panels/components/sidebar/item.blade.php'),
        ], 'navigation-enhanced-views');
    }
}
