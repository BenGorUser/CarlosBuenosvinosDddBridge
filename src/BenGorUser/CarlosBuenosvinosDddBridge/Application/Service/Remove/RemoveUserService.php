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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\Remove;

use BenGorUser\User\Application\Command\Remove\RemoveUserHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * Remove user service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class RemoveUserService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var RemoveUserHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param RemoveUserHandler $aHandler The command handler
     */
    public function __construct(RemoveUserHandler $aHandler)
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
