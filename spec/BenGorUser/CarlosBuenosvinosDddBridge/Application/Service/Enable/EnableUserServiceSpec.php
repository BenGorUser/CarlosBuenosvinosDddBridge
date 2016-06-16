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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\Enable;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\Enable\EnableUserService;
use BenGorUser\User\Application\Command\Enable\EnableUserCommand;
use BenGorUser\User\Application\Command\Enable\EnableUserHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of EnableUserService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class EnableUserServiceSpec extends ObjectBehavior
{
    function let(EnableUserHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(EnableUserService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        EnableUserHandler $handler,
        EnableUserCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
