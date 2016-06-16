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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\LogIn;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\LogIn\LogInUserService;
use BenGorUser\User\Application\Command\LogIn\LogInUserCommand;
use BenGorUser\User\Application\Command\LogIn\LogInUserHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of LogInUserService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class LogInUserServiceSpec extends ObjectBehavior
{
    function let(LogInUserHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(LogInUserService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        LogInUserHandler $handler,
        LogInUserCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
