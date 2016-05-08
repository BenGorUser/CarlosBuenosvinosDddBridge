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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\RevokeRole;

use BenGorUser\User\Application\Service\RevokeRole\RevokeUserRoleHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * Revoke user role service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class RevokeUserRoleService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var RevokeUserRoleHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param RevokeUserRoleHandler $aHandler The command handler
     */
    public function __construct(RevokeUserRoleHandler $aHandler)
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
