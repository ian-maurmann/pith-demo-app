<?php

/**
 * Jello Layout Route
 * -------------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoThemePack;

use Pith\Framework\PithRoute;

/**
 * Class JelloLayoutRoute
 * @package Pith\ExampleAirshipPack
 */
class DemoMainLayoutRoute extends PithRoute
{
    public $pack             = '\\Pith\\DemoApp\\DemoThemePack\\DemoThemePack';
    public $route_type       = 'layout';
    public $access_level     = 'world';
    public $view             = '[^route_folder]/demo-main-layout-view.phtml';
    public $view_adapter     = '\\Pith\\PhtmlViewAdapter2\\PithPhtmlViewAdapter2';
    public $view_requisition = '\\Pith\\DemoApp\\DemoThemePack\\DemoMainLayoutViewRequisition';
}