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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\GrantRole;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\GrantRole\GrantUserRoleService;
use BenGorUser\User\Application\Command\GrantRole\GrantUserRoleCommand;
use BenGorUser\User\Application\Command\GrantRole\GrantUserRoleHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of GrantUserRoleService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class GrantUserRoleServiceSpec extends ObjectBehavior
{
    function let(GrantUserRoleHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(GrantUserRoleService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        GrantUserRoleHandler $handler,
        GrantUserRoleCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
