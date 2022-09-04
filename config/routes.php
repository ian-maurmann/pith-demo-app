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
    ['GET', '/john-1',                    '\\Pith\\DemoApp\\DemoPagesPack\\John1Route'],
    ['GET', '/jello',                     '\\Pith\\ExampleAirshipPack\\JelloRoute'], // TODO REMOVE Jello Example
    ['GET', '/library/foo/{filepath:.+}', '\\Pith\\ExampleResourcePack\\FooResourceRoute'], // TODO REMOVE Foo Example
];