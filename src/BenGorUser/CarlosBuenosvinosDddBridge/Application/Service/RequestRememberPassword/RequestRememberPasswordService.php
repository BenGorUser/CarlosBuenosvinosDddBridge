<?php

/*
 * This file is part of the BenGorUser package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\RequestRememberPassword;

use BenGorUser\User\Application\Service\RequestRememberPassword\RequestRememberPasswordHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * Request remember password service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class RequestRememberPasswordService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var RequestRememberPasswordHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param RequestRememberPasswordHandler $aHandler The command handler
     */
    public function __construct(RequestRememberPasswordHandler $aHandler)
    {
        $this->handler = $aHandler;
    }

    /**
     * {@inheritdoc}
     */
    public function execute($request = null)
    {
        return $this->handler($request);
    }
}
