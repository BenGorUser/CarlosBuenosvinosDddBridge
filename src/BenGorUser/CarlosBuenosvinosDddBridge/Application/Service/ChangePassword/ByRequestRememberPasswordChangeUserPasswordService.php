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

use BenGorUser\User\Application\Command\ChangePassword\ByRequestRememberPasswordChangeUserPasswordHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * By request remember password change user password service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class ByRequestRememberPasswordChangeUserPasswordService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var ByRequestRememberPasswordChangeUserPasswordHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param ByRequestRememberPasswordChangeUserPasswordHandler $aHandler The command handler
     */
    public function __construct(ByRequestRememberPasswordChangeUserPasswordHandler $aHandler)
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
