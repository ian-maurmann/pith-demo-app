<?php

/**
 * New User Sign-Up Route
 * ----------------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Short property names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Framework\PithRoute;

/**
 * Class NewUserSignUpRoute
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class NewUserSignUpRoute extends PithRoute
{
    public string $route_type       = 'page';
    public string $pack             = '\\Pith\\DemoApp\\DemoAppPagesPack\\DemoAppPagesPack';
    public string $access_level     = 'world';
    public string $view_requisition = '\\Pith\\DemoApp\\DemoAppPagesPack\\NewUserSignUpViewRequisition';
    public string $view             = '[^route_folder]/new-user-sign-up-view.latte';
    public string $layout           = '\\Pith\\DemoApp\\DemoAppThemePack\\MainLayoutRoute';

    public string $page_title       = 'New User Sign-up - ' . PITH_DEMO_PAGE_MAIN_TITLE;
    public string $meta_keywords    = 'new user sign-up, demo, keyword, keywords';
    public string $meta_description = 'New User Sign-up. New User Sign-up page description here.';
}
