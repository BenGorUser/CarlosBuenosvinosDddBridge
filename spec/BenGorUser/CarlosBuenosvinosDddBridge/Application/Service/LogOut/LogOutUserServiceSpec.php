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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\LogOut;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\LogOut\LogOutUserService;
use BenGorUser\User\Application\Command\LogOut\LogOutUserCommand;
use BenGorUser\User\Application\Command\LogOut\LogOutUserHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of LogOutUserService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class LogOutUserServiceSpec extends ObjectBehavior
{
    function let(LogOutUserHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(LogOutUserService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        LogOutUserHandler $handler,
        LogOutUserCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
