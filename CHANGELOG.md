# Changelog

All notable changes to this package will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [1.0.4] - 2026-10-14

### Fixed

- Sidebar items with `->visible(false)`/`->hidden()` no longer appear as child items. Previously they were rendered regardless, so clicking one landed on a page that then responded with a 403.
- Restored sidebar item labels on **Filament 5.10.2+**, which now passes the navigation label via a dedicated `label` prop instead of only the slot. The component falls back to the slot when the prop isn't set, so this remains fully compatible with earlier Filament 5.x releases — no `composer.json` constraint change was needed.

## [1.0.3] - 2026-09-13

### Added

- Generic "locked" overlay support for sidebar items: a `NavigationItem` marked with `->extraAttributes(['data-nav-locked' => 'true'])` now renders a lock badge next to its icon, without the package needing any app-specific knowledge of why it's locked.

## [1.0.2] - 2026-07-12

### Added

- GitHub Actions workflow for automated tests on PHP 8.2.
- Renovate configuration for automated dependency updates.
- Security policy for reporting vulnerabilities.

## [1.0.1] - 2026-06-15

### Added

- Support for registering standalone parent navigation items without a dedicated Page class, via `NavigationEnhancedPlugin::parentNavigationItem()`.

### Changed

- Simplified installation instructions in the README.

## [1.0.0] - 2026-06-05

### Added

- Initial stable release: collapsible child-item support for the Filament v5 sidebar, including the `sidebar/item` Blade override, the `HasNavigationChildren` trait, the plugin class, and the service provider.
