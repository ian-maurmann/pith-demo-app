<?php

/**
 * Index Front Controller
 *
 * @noinspection DuplicatedCode                        - Front controller shares code with other example front controllers, ignore.
 * @noinspection PhpVariableNamingConventionInspection - Short variable names are ok.
 * @noinspection PhpFullyQualifiedNameUsageInspection  - Ignore.
 * @noinspection PhpUnhandledExceptionInspection       - Allow unhandled exceptions to fall through the front controller.
 */

// Turn on strict types
declare(strict_types=1);


use Pith\Framework\PithException;


// ========================================================================================

// Switch folders
chdir('../'); // <---- 1) Switch to whatever folder you want to run the App from.

// ========================================================================================

// Error logging
ini_set('log_errors', '1');
ini_set('error_log', './php_errors.log'); // <---- 2) Add location of where you want the error log to be

// ========================================================================================

// Auto-Load
require 'vendor/autoload.php'; // <---- 3) Enter the path to autoload.php, from the folder you're running the App from.

// ========================================================================================

// Add env constants
require './env.php'; // <---- 4) Set the env constants filepath here

// Add other constants
require './tracked-constants.php'; // <---- 5) Set the tracked constants filepath here

// ========================================================================================

// Setup our Container
$container = new DI\Container();

// ========================================================================================

// Load the Pith Dependency Injection Wrapper
$dependency_injection_wrapper = null;
try {
    // Pith Framework App
    $dependency_injection_wrapper = $container->get('\\Pith\\Framework\\PithDependencyInjection');
} catch (\DI\DependencyException $exception) {
    throw new PithException(
        'Pith Framework Exception 5009: The container encountered a \DI\DependencyException exception. Message: ' . $exception->getMessage(),
        5009,
        $exception
    );
} catch (\DI\NotFoundException $exception) {
    throw new PithException(
        'Pith Framework Exception 5008: The container encountered a \DI\NotFoundException exception. Message: ' . $exception->getMessage(),
        5008,
        $exception
    );
}

// ========================================================================================

// Load Pith
$pith = null;
try {
    // Pith Framework App
    $pith = $dependency_injection_wrapper->container->get('\\Pith\\Framework\\PithApp');
} catch (\DI\DependencyException $exception) {
    throw new PithException(
        'Pith Framework Exception 5002: The container encountered a \DI\DependencyException exception. Message: ' . $exception->getMessage(),
        5002,
        $exception
    );
} catch (\DI\NotFoundException $exception) {
    throw new PithException(
        'Pith Framework Exception 5001: The container encountered a \DI\NotFoundException exception. Message: ' . $exception->getMessage(),
        5001,
        $exception
    );
}

// ========================================================================================

if($pith) {
    // Add route list to config
    $pith->config->route_list_namespace = '\\Pith\\DemoApp\\DemoAppRouteList'; // <---- 6) Add namespace of your Route List here

    // Start
    $pith->engine->start();
}

// ========================================================================================

