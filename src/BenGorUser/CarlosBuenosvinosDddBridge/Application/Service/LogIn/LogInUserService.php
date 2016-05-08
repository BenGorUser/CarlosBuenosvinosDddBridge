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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\LogIn;

use BenGorUser\User\Application\Service\LogIn\LogInUserHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * User login service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class LogInUserService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var LogInUserHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param LogInUserHandler $aHandler The command handler
     */
    public function __construct(LogInUserHandler $aHandler)
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
