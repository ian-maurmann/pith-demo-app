<?php

/**
 * Demo Pages Pack
 * --------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoPagesPack;

use Pith\Framework\PithPack;

/**
 * Class DemoThemePack
 * @package Pith\DemoApp\DemoPagesPack
 */
class DemoPagesPack extends PithPack
{
    public $access_level = 'world';
}