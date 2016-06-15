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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\Invite;

use BenGorUser\User\Application\Command\Invite\InviteUserHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * Invite user service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class InviteUserService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var InviteUserHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param InviteUserHandler $aHandler The command handler
     */
    public function __construct(InviteUserHandler $aHandler)
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
