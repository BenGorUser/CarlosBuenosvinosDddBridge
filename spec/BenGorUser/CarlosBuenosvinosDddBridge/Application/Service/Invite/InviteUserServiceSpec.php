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

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\Invite\InviteUserService;
use BenGorUser\User\Application\Command\Invite\InviteUserCommand;
use BenGorUser\User\Application\Command\Invite\InviteUserHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of InviteUserService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class InviteUserServiceSpec extends ObjectBehavior
{
    function let(InviteUserHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InviteUserService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        InviteUserHandler $handler,
        InviteUserCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
