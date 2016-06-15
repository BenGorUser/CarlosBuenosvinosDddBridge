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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\Enable;

use BenGorUser\User\Application\Command\Enable\EnableUserHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * Enable user service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class EnableUserService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var EnableUserHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param EnableUserHandler $aHandler The command handler
     */
    public function __construct(EnableUserHandler $aHandler)
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
