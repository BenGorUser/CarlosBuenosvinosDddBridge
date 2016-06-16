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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\GrantRole;

use BenGorUser\User\Application\Command\GrantRole\GrantUserRoleHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * Grant user role service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class GrantUserRoleService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var GrantUserRoleHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param GrantUserRoleHandler $aHandler The command handler
     */
    public function __construct(GrantUserRoleHandler $aHandler)
    {
        $this->handler = $aHandler;
    }

    /**
     * {@inheritdoc}
     */
    public function execute($request = null)
    {
        $this->handler->__invoke($request);
    }
}
