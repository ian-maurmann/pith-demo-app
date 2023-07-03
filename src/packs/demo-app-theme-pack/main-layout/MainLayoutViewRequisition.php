<?php

/**
 * Main Layout View-Requisition
 * ----------------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpMissingParentCallCommonInspection  - Preparer parent methods exist as fallback.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */


declare(strict_types=1);

namespace Pith\DemoApp\DemoAppThemePack;

use Pith\Framework\PithViewRequisition;

/**
 * Class MainLayoutViewRequisition
 * @package Pith\Framework\SharedThemePack
 */
class MainLayoutViewRequisition extends PithViewRequisition
{
    public string $requisition_type = 'layout-view-requisition';

    public function runRequisition()
    {
        // Headers
        $this->addHeader('Use UTF-8 Encoding', 'Content-Type: text/html; charset=utf-8');
        $this->addHeader('Show site runs PHP 8', 'X-Powered-By: PHP/8');

        // Resources
        $this->addStylesheet('Fixie Reset 4 Stylesheet', '/resources/vendor/common-libraries/fixie-reset-4.0.2/fixie-reset.css', 'reset');
        $this->addStylesheet('Green Layout Stylesheet', '/resources/framework/shared-ui/green-and-white-theme/green-and-white-theme.css', 'application-for-layout');
    }
}