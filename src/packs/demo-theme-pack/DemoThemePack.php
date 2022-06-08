<?php

/**
 * Demo Theme Pack
 * --------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoThemePack;

use Pith\Framework\PithPack;

/**
 * Class DemoThemePack
 * @package Pith\DemoApp\DemoThemePack
 */
class DemoThemePack extends PithPack
{
    public $access_level = 'world';
}