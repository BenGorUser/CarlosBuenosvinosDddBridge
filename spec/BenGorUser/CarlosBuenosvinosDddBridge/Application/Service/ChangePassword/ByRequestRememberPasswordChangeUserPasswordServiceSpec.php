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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\ChangePassword;

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\ChangePassword\ByRequestRememberPasswordChangeUserPasswordService;
use BenGorUser\User\Application\Command\ChangePassword\ByRequestRememberPasswordChangeUserPasswordCommand;
use BenGorUser\User\Application\Command\ChangePassword\ByRequestRememberPasswordChangeUserPasswordHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of ByRequestRememberPasswordChangeUserPasswordService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class ByRequestRememberPasswordChangeUserPasswordServiceSpec extends ObjectBehavior
{
    function let(ByRequestRememberPasswordChangeUserPasswordHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ByRequestRememberPasswordChangeUserPasswordService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        ByRequestRememberPasswordChangeUserPasswordHandler $handler,
        ByRequestRememberPasswordChangeUserPasswordCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
