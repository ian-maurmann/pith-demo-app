<?php

/**
 * Routes
 */

// Turn on strict types
declare(strict_types=1);

// Define our App Routes
const APP_ROUTES = [
    ['GET', '/',                          '\\Pith\\DemoApp\\DemoPagesPack\\IndexRoute'],
    ['GET', '/lorem-ipsum',               '\\Pith\\DemoApp\\DemoPagesPack\\LoremIpsumRoute'],
    ['GET', '/jello',                     '\\Pith\\ExampleAirshipPack\\JelloRoute'],
    ['GET', '/library/foo/{filepath:.+}', '\\Pith\\ExampleResourcePack\\FooResourceRoute'],
];