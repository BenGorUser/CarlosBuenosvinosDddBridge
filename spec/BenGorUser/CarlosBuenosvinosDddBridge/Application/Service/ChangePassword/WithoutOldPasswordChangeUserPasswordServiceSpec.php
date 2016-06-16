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

use BenGorUser\CarlosBuenosvinosDddBridge\Application\Service\ChangePassword\WithoutOldPasswordChangeUserPasswordService;
use BenGorUser\User\Application\Command\ChangePassword\WithoutOldPasswordChangeUserPasswordCommand;
use BenGorUser\User\Application\Command\ChangePassword\WithoutOldPasswordChangeUserPasswordHandler;
use Ddd\Application\Service\ApplicationService;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of WithoutOldPasswordChangeUserPasswordService class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class WithoutOldPasswordChangeUserPasswordServiceSpec extends ObjectBehavior
{
    function let(WithoutOldPasswordChangeUserPasswordHandler $handler)
    {
        $this->beConstructedWith($handler);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(WithoutOldPasswordChangeUserPasswordService::class);
    }

    function it_implements_application_service()
    {
        $this->shouldHaveType(ApplicationService::class);
    }

    function it_executes(
        WithoutOldPasswordChangeUserPasswordHandler $handler,
        WithoutOldPasswordChangeUserPasswordCommand $request
    ) {
        $handler->__invoke($request)->shouldBeCalled();

        $this->execute($request);
    }
}
