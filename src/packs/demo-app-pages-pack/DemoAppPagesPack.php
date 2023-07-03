<?php

/**
 * Demo App Pages Pack
 * -------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Framework\PithPack;

/**
 * Class DemoAppPagesPack
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class DemoAppPagesPack extends PithPack
{
    public string $access_level = 'world';
}