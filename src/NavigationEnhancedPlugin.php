<?php

namespace Agroezinger\FilamentNavigationEnhanced;

use Filament\Contracts\Plugin;
use Filament\Panel;

class NavigationEnhancedPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-navigation-enhanced';
    }

    public function register(Panel $panel): void {}

    public function boot(Panel $panel): void {}
}
