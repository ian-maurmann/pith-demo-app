<?php

/**
 * Demo App Theme Pack
 * -------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppThemePack;

use Pith\Workflow\PithPack;

/**
 * Class DemoAppThemePack
 * @package Pith\DemoApp\DemoAppThemePack
 */
class DemoAppThemePack extends PithPack
{
    public string $access_level = 'world';
}