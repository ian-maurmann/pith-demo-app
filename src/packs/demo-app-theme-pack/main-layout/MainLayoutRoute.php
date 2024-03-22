<?php

/**
 * Main Layout Route
 * -----------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppThemePack;

use Pith\Workflow\PithRoute;

/**
 * Class MainLayoutRoute
 * @package Pith\DemoApp\DemoAppThemePack
 */
class MainLayoutRoute extends PithRoute
{
    public string $pack             = '\\Pith\\DemoApp\\DemoAppThemePack\\DemoAppThemePack';
    public string $route_type       = 'layout';
    public string $access_level     = 'world';
    public string $view_requisition = '\\Pith\\DemoApp\\DemoAppThemePack\\MainLayoutViewRequisition';
    public string $view             = '[^route_folder]/main-layout-view.latte';
}