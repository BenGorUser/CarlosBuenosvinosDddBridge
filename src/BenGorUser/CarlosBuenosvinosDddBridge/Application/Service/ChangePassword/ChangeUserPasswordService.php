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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\ChangePassword;

use BenGorUser\User\Application\Service\ChangePassword\ChangeUserPasswordHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * Change user password service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class ChangeUserPasswordService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var ChangeUserPasswordHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param ChangeUserPasswordHandler $aHandler The command handler
     */
    public function __construct(ChangeUserPasswordHandler $aHandler)
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
