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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\SignUp;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\SignUp\WithConfirmationSignUpUserService;
use BenGorUser\User\Application\Command\SignUp\WithConfirmationSignUpUserCommand;
use BenGorUser\User\Application\Command\SignUp\WithConfirmationSignUpUserHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of WithConfirmationSignUpUserService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class WithConfirmationSignUpUserServiceSpec extends ObjectBehavior
{
    function let(WithConfirmationSignUpUserHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(WithConfirmationSignUpUserService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        WithConfirmationSignUpUserHandler $handler,
        WithConfirmationSignUpUserCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
