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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\Invite;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\Invite\ResendInvitationUserService;
use BenGorUser\User\Application\Command\Invite\ResendInvitationUserCommand;
use BenGorUser\User\Application\Command\Invite\ResendInvitationUserHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of ResendInvitationUserService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ResendInvitationUserServiceSpec extends ObjectBehavior
{
    function let(ResendInvitationUserHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ResendInvitationUserService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        ResendInvitationUserHandler $handler,
        ResendInvitationUserCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
