<?php

/**
 * Demo App Route List
 * -------------------
 *
 * @noinspection PhpClassNamingConventionInspection - Long class names are ok.
 */


declare(strict_types=1);


namespace Pith\DemoApp;

use Pith\Framework\PithRouteList;

/**
 * Class DemoAppRouteList
 * @package Pith\DemoApp
 */
class DemoAppRouteList extends PithRouteList
{
    public array $routes = [
        ['route-group', '',              PITH_DEMO_PAGES_ROUTE_GROUP_PATH,                   '\\Pith\\Framework\\SharedInfrastructure\\DemoPagesRouteList'],
        ['route-group', '',              PITH_ENV_INFO_PAGES_ROUTE_GROUP_PATH,               '\\Pith\\Framework\\SharedInfrastructure\\Pages\\EnvInfoPages\\EnvInfoRouteList'],
        ['route-group', '',              PITH_USER_SYSTEM_AJAX_ENDPOINTS_PATH,               '\\Pith\\Framework\\SharedInfrastructure\\Endpoints\\UserSystemAjaxEndpoints\\UserSystemAjaxEndpointsRouteList'],
        ['route-group', '',              PITH_PANEL_PATH,                                    '\\Pith\\Framework\\Panel\\PithPanelRouteList'],
        ['route-group', '',              TASKS_URL_PATH,                                     '\\Pith\\Framework\\SharedInfrastructure\\Tasks\\TasksRouteList'],
        ['route',       'POST',          SHARED_UI_USER_LOGIN_FORM_ACTION_LINK,              '\\Pith\\Framework\\SharedInfrastructure\\Pages\\SharedUiPages\\PerformUserLoginRoute'],
        ['route',       ['GET', 'POST'], SHARED_UI_USER_PERFORM_LOGOUT_LINK,                 '\\Pith\\Framework\\SharedInfrastructure\\Pages\\SharedUiPages\\PerformUserLogoutRoute'],
        ['route',       ['GET', 'POST'], '/default-landing',                                 '\\Pith\\Framework\\SharedInfrastructure\\DefaultLandingRoute'],
        ['route',       ['GET', 'POST'], '/error-403',                                       '\\Pith\\Framework\\SharedInfrastructure\\Error403Route'],
        ['route',       ['GET', 'POST'], '/error-404',                                       '\\Pith\\Framework\\SharedInfrastructure\\Error404Route'],
        ['route',       ['GET', 'POST'], '/error-405',                                       '\\Pith\\Framework\\SharedInfrastructure\\Error405Route'],
        ['route',       'GET',           '/favicon.ico',                                     '\\Pith\\Framework\\SharedUiResourcePack\\PithFrameworkLogoFaviconIcoRoute'],
        ['route',       'GET',           '/resources/framework/shared-ui/{filepath:.+}',     '\\Pith\\Framework\\SharedUiResourcePack\\SharedUiApplicationResourceRoute'],
        ['route',       'GET',           '/resources/vendor/common-fonts/{filepath:.+}',     '\\Pith\\Framework\\CommonFontsResourcePack\\CommonFontsResourceRoute'],
        ['route',       'GET',           '/resources/vendor/common-libraries/{filepath:.+}', '\\Pith\\Framework\\CommonLibrariesResourcePack\\CommonLibrariesResourceRoute'],
        ['route',       ['GET', 'POST'], '/',                                                '\\Pith\\DemoApp\\DemoAppPagesPack\\HomeRoute'],
        ['route',       ['GET', 'POST'], '/login',                                           '\\Pith\\DemoApp\\DemoAppPagesPack\\LoginRoute'],
        ['route',       ['GET', 'POST'], '/new-user-sign-up',                                '\\Pith\\DemoApp\\DemoAppPagesPack\\NewUserSignUpRoute'],
        ['route',       ['GET', 'POST'], '/page-2',                                          '\\Pith\\DemoApp\\DemoAppPagesPack\\Page2Route'],
        ['route',       ['GET', 'POST'], '/page-3',                                          '\\Pith\\DemoApp\\DemoAppPagesPack\\Page3Route'],
        ['route',       ['GET', 'POST'], '/sign-out',                                        '\\Pith\\DemoApp\\DemoAppPagesPack\\SignOutRoute'],
        ['route',       ['GET', 'POST'], '/user-page-1',                                     '\\Pith\\DemoApp\\DemoAppPagesPack\\UserPage1Route'],
        ['route',       ['GET', 'POST'], '/user-page-2',                                     '\\Pith\\DemoApp\\DemoAppPagesPack\\UserPage2Route'],
        ['route',       'GET',           '/resources/theme/{filepath:.+}',                   '\\Pith\\DemoApp\\DemoAppThemePack\\ThemeResourceRoute'],
    ];
}