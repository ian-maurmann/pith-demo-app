<?php

/**
 * Index Route
 * -----------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Ignore.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoPagesPack;

use Pith\Framework\PithRoute;

/**
 * Class IndexRoute
 * @package Pith\DemoApp\DemoPagesPack
 */
class IndexRoute extends PithRoute
{
    public $pack         = '\\Pith\\DemoApp\\DemoPagesPack\\DemoPagesPack';
    public $route_type   = 'page';
    public $access_level = 'world';
 // public $action       = '\\Pith\\DemoApp\\DemoPagesPack\\IndexAction';
 // public $preparer     = '\\Pith\\DemoApp\\DemoPagesPack\\IndexPreparer';
    public $use_layout   = false;
 // public $layout       = '\\Pith\\DemoApp\\DemoThemePack\\DemoLandingLayoutRoute';
    public $view         = '[^route_folder]/index-view.phtml';
    public $view_adapter = '\\Pith\\PhtmlViewAdapter2\\PithPhtmlViewAdapter2';
}