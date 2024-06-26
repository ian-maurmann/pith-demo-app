<?php

/**
 * Sign-Out Action
 * ---------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpMissingParentCallCommonInspection  - Action parent methods exist as fallback.
 * @noinspection PhpVariableNamingConventionInspection - Short variable names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4 not PSR-0.
 */

declare(strict_types=1);

namespace Pith\DemoApp\DemoAppPagesPack;

use Pith\Framework\PithAppRetriever;
use Pith\Framework\PithException;
use Pith\Workflow\PithAction;

/**
 * Class SignOutAction
 * @package Pith\DemoApp\DemoAppPagesPack
 */
class SignOutAction extends PithAction
{
    private PithAppRetriever $app_retriever;

    public function __construct(PithAppRetriever $app_retriever)
    {
        // Set object dependencies
        $this->app_retriever = $app_retriever;
    }

    /**
     * @throws PithException
     */
    public function runAction()
    {
        // Get app
        $app = $this->app_retriever->getApp();

        // Variables
        $logout_note = $app->registry->getRuntimeNote('logout-note');

        // Push to Preparer
        $this->prepare->logout_note = $logout_note;
    }
}