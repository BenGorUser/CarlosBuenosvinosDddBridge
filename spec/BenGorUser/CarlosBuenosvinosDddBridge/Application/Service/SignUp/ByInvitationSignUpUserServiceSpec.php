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

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\SignUp\ByInvitationSignUpUserService;
use BenGorUser\User\Application\Command\SignUp\ByInvitationSignUpUserCommand;
use BenGorUser\User\Application\Command\SignUp\ByInvitationSignUpUserHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of ByInvitationSignUpUserService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ByInvitationSignUpUserServiceSpec extends ObjectBehavior
{
    function let(ByInvitationSignUpUserHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ByInvitationSignUpUserService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        ByInvitationSignUpUserHandler $handler,
        ByInvitationSignUpUserCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
