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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\LogOut;

use BenGorUser\User\Application\Service\LogOut\LogOutUserHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * User logout service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class LogOutUserService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var LogOutUserHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param LogOutUserHandler $aHandler The command handler
     */
    public function __construct(LogOutUserHandler $aHandler)
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
