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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\RevokeRole;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\RevokeRole\RevokeUserRoleService;
use BenGorUser\User\Application\Command\RevokeRole\RevokeUserRoleCommand;
use BenGorUser\User\Application\Command\RevokeRole\RevokeUserRoleHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of RevokeUserRoleService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class RevokeUserRoleServiceSpec extends ObjectBehavior
{
    function let(RevokeUserRoleHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(RevokeUserRoleService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        RevokeUserRoleHandler $handler,
        RevokeUserRoleCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
