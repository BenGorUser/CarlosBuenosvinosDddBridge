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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\RequestRememberPassword;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\RequestRememberPassword\RequestRememberPasswordService;
use BenGorUser\User\Application\Command\RequestRememberPassword\RequestRememberPasswordCommand;
use BenGorUser\User\Application\Command\RequestRememberPassword\RequestRememberPasswordHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of RequestRememberPasswordService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class RequestRememberPasswordServiceSpec extends ObjectBehavior
{
    function let(RequestRememberPasswordHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(RequestRememberPasswordService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        RequestRememberPasswordHandler $handler,
        RequestRememberPasswordCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
