<?php

/**
 * Sign-Out Route
 * --------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Short property names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Workflow\PithRoute;

/**
 * Class SignOutRoute
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class SignOutRoute extends PithRoute
{
    public string $route_type       = 'page';
    public string $pack             = '\\Pith\\DemoApp\\DemoAppPagesPack\\DemoAppPagesPack';
    public string $access_level     = 'logout';
    public string $action           = '\\Pith\\DemoApp\\DemoAppPagesPack\\SignOutAction';
    public string $view             = '[^route_folder]/sign-out-view.latte';
    public string $layout           = '\\Pith\\DemoApp\\DemoAppThemePack\\MainLayoutRoute';

    public string $page_title       = 'Sign-out - ' . PITH_DEMO_PAGE_MAIN_TITLE;
    public string $meta_keywords    = 'Sign out, demo, keyword, keywords';
    public string $meta_description = 'Sign out. Sign out page description here.';
}
