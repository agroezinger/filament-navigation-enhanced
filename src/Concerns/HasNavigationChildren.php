<?php

namespace Agroezinger\FilamentNavigationEnhanced\Concerns;

use Filament\Navigation\NavigationItem;

/**
 * Add this trait to a Filament Resource or Page to declare collapsible
 * child items that appear directly below the parent in the sidebar.
 *
 * Implement getNavigationChildItems() and return an array of NavigationItem
 * instances. The parent item itself can still have its own URL.
 *
 * Child Resources/Pages that should NOT appear as standalone sidebar items
 * must set:  protected static bool $shouldRegisterNavigation = false;
 */
trait HasNavigationChildren
{
    /**
     * @return NavigationItem[]
     */
    public static function getNavigationChildItems(): array
    {
        return [];
    }

    public static function getNavigationItems(): array
    {
        $items = parent::getNavigationItems();

        $children = static::getNavigationChildItems();

        if (! empty($children)) {
            foreach ($items as $item) {
                $item->childItems($children);
            }
        }

        return $items;
    }
}
