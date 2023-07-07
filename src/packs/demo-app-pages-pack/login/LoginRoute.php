<?php

/**
 * Login Route
 * -----------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Short property names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Framework\PithRoute;

/**
 * Class LoginRoute
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class LoginRoute extends PithRoute
{
    public string $route_type       = 'page';
    public string $pack             = '\\Pith\\DemoApp\\DemoAppPagesPack\\DemoAppPagesPack';
    public string $access_level     = 'world';
    public string $view_requisition = '\\Pith\\DemoApp\\DemoAppPagesPack\\LoginViewRequisition';
    public string $view             = '[^route_folder]/login-view.latte';
    public string $layout           = '\\Pith\\DemoApp\\DemoAppThemePack\\MainLayoutRoute';

    public string $page_title       = 'Log In - ' . PITH_DEMO_PAGE_MAIN_TITLE;
    public string $meta_keywords    = 'login, demo, keyword, keywords';
    public string $meta_description = 'Login. Login page description here.';
}
