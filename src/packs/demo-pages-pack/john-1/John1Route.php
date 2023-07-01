<?php

/**
 * John 1 Route
 * -----------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Ignore.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoPagesPack;

use Pith\Framework\PithRoute;

/**
 * Class John1Route
 * @package Pith\DemoApp\DemoPagesPack
 */
class John1Route extends PithRoute
{
    public $pack         = '\\Pith\\DemoApp\\DemoPagesPack\\DemoPagesPack';
    public $route_type   = 'page';
    public $access_level = 'world';
    public $use_layout   = true;
    public $layout       = '\\Pith\\DemoApp\\DemoThemePack\\DemoMainLayoutRoute';
    public $view         = '[^route_folder]/john-1-view.phtml';
    public $view_adapter = '\\Pith\\PhtmlViewAdapter2\\PithPhtmlViewAdapter2';
}