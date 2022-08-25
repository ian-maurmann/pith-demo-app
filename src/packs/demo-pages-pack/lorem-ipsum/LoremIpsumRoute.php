<?php

/**
 * Lorem Ipsum Route
 * -----------------
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
class LoremIpsumRoute extends PithRoute
{
    public $pack         = '\\Pith\\DemoApp\\DemoPagesPack\\DemoPagesPack';
    public $route_type   = 'page';
    public $access_level = 'world';
    // public $action       = '\\Pith\\DemoApp\\DemoPagesPack\\LoremIpsumAction';
    // public $preparer     = '\\Pith\\DemoApp\\DemoPagesPack\\LoremIpsumPreparer';
    public $use_layout   = true;
    public $layout       = '\\Pith\\DemoApp\\DemoThemePack\\DemoMainLayoutRoute';
    public $view         = '[^route_folder]/lorem-ipsum-view.phtml';
    public $view_adapter = '\\Pith\\PhtmlViewAdapter2\\PithPhtmlViewAdapter2';
}