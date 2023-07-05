<?php

/**
 * Nav Links Route
 * ---------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Short property names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Framework\PithRoute;

/**
 * Class NavLinksRoute
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class NavLinksRoute extends PithRoute
{
    public string $route_type       = 'partial';
    public string $pack             = '\\Pith\\DemoApp\\DemoAppPagesPack\\DemoAppPagesPack';
    public string $access_level     = 'world';
    public string $view             = '[^route_folder]/nav-links.latte';
}
