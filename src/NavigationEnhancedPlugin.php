<?php

namespace Agroezinger\FilamentNavigationEnhanced;

use Filament\Contracts\Plugin;
use Filament\Navigation\NavigationItem;
use Filament\Panel;

class NavigationEnhancedPlugin implements Plugin
{
    /**
     * @var NavigationItem[]
     */
    protected array $standaloneParentItems = [];

    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-navigation-enhanced';
    }

    /**
     * Register a standalone parent navigation item with child items,
     * without needing a dedicated Filament Page class.
     */
    public function parentNavigationItem(NavigationItem $item): static
    {
        $this->standaloneParentItems[] = $item;

        return $this;
    }

    public function register(Panel $panel): void {}

    public function boot(Panel $panel): void
    {
        if (!empty($this->standaloneParentItems)) {
            $panel->navigationItems($this->standaloneParentItems);
        }
    }
}
