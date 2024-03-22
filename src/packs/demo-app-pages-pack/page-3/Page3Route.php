<?php

/**
 * Page-3 Route
 * ------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Short property names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Workflow\PithRoute;

/**
 * Class Page3Route
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class Page3Route extends PithRoute
{
    public string $route_type       = 'page';
    public string $pack             = '\\Pith\\DemoApp\\DemoAppPagesPack\\DemoAppPagesPack';
    public string $access_level     = 'world';
    public string $view             = '[^route_folder]/page-3-view.latte';
    public string $layout           = '\\Pith\\DemoApp\\DemoAppThemePack\\MainLayoutRoute';

    public string $page_title       = 'Page 3 - ' . PITH_DEMO_PAGE_MAIN_TITLE;
    public string $meta_keywords    = 'page 3, demo, keyword, keywords';
    public string $meta_description = 'Page 3. Page 3 page description here.';
}
