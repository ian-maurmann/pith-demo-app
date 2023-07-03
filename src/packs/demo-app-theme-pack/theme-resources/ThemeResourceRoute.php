<?php

/**
 * Demo App - Theme Resource Route
 * -------------------------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppThemePack;

use Pith\Framework\PithRoute;

/**
 * Class ThemeResourceRoute
 * @package Pith\Framework\SharedUiResourcePack
 */
class ThemeResourceRoute extends PithRoute
{
    public string $pack            = 'Pith\\DemoApp\\DemoAppThemePack\\DemoAppThemePack';
    public string $route_type      = 'resource-folder';
    public string $access_level    = 'world';
    public string $resource_folder = '[^route_folder]/resources/';
    public string $cache_level     = 'Cache-Control: public, max-age=31536000, immutable, stale-while-revalidate=604800, stale-if-error=1209600';
}
