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

use BenGorUser\User\Application\Command\SignUp\WithConfirmationSignUpUserHandler;
use Ddd\Application\Service\ApplicationService;

/**
 * With confirmation sign up user user service class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class WithConfirmationSignUpUserService implements ApplicationService
{
    /**
     * The command handler.
     *
     * @var WithConfirmationSignUpUserHandler
     */
    private $handler;

    /**
     * Constructor.
     *
     * @param WithConfirmationSignUpUserHandler $aHandler The command handler
     */
    public function __construct(WithConfirmationSignUpUserHandler $aHandler)
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
