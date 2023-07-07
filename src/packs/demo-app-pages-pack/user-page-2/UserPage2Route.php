<?php

/**
 * User-Page-2 Route
 * -----------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Short property names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Framework\PithRoute;

/**
 * Class UserPage1Route
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class UserPage2Route extends PithRoute
{
    public string $route_type       = 'page';
    public string $pack             = '\\Pith\\DemoApp\\DemoAppPagesPack\\DemoAppPagesPack';
    public string $access_level     = 'user';
    public string $view             = '[^route_folder]/user-page-2-view.latte';
    public string $layout           = '\\Pith\\DemoApp\\DemoAppThemePack\\MainLayoutRoute';

    public string $page_title       = 'User Page 2 - ' . PITH_DEMO_PAGE_MAIN_TITLE;
    public string $meta_keywords    = 'user page 2, demo, keyword, keywords';
    public string $meta_description = 'User Page 2. User page 2 page description here.';
}

