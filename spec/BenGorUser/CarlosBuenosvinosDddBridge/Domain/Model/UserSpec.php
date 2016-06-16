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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Domain\Model;

use BenGorUser\CarlosBuenosvinosDddBridge\Domain\Model\User;
use BenGorUser\User\Domain\Model\Event\UserEvent as BaseUserEvent;
use BenGorUser\User\Domain\Model\User as BaseUser;
use BenGorUser\User\Domain\Model\UserEmail;
use BenGorUser\User\Domain\Model\UserId;
use BenGorUser\User\Domain\Model\UserPassword;
use BenGorUser\User\Domain\Model\UserRole;
use BenGorUser\User\Infrastructure\Security\DummyUserPasswordEncoder;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of User class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UserSpec extends ObjectBehavior
{
    function let()
    {
        $encoder = new DummyUserPasswordEncoder('encodedPassword');

        $this->beConstructedSignUp(
            new UserId(),
            new UserEmail('test@test.com'),
            UserPassword::fromPlain('strongpassword', $encoder),
            [new UserRole('ROLE_USER')]
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }

    function it_extends_base_user()
    {
        $this->shouldHaveType(BaseUser::class);
    }

    function it_publishes_with_domain_event_published_singleton_system_without_recording_events(BaseUserEvent $event)
    {
        $this->events()->shouldHaveCount(0);
        $this->enableAccount();
        $this->events()->shouldHaveCount(0);
    }
}
