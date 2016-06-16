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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\SignUp;

use BenGorUser\User\Application\Command\SignUp\ByInvitationSignUpUserHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * By invitation sign up user user service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class ByInvitationSignUpUserService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var ByInvitationSignUpUserHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param ByInvitationSignUpUserHandler $aHandler The command handler
     */
    public function __construct(ByInvitationSignUpUserHandler $aHandler)
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
