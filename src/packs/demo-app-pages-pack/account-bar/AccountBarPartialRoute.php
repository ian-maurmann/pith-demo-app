<?php

/**
 * Account Bar Partial Route
 * -------------------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Ignore.
 * @noinspection PhpClassNamingConventionInspection    - Long class name is ok here.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Framework\PithRoute;

/**
 * Class AccountBarPartialRoute
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class AccountBarPartialRoute extends PithRoute
{
    public string $route_type   = 'partial';
    public string $pack         = '\\Pith\\DemoApp\\DemoAppPagesPack\\DemoAppPagesPack';
    public string $access_level = 'world';
    public string $action       = '\\Pith\\DemoApp\\DemoAppPagesPack\\AccountBarAction';
    public string $view         = '[^route_folder]/account-bar-partial-view.phtml';
    public string $view_adapter = '\\Pith\\PhtmlViewAdapter2\\PithPhtmlViewAdapter2';
}
