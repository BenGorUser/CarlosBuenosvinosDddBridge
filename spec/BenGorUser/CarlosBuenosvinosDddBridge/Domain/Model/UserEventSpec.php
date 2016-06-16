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

use BenGorUser\CarlosBuenosvinosDddBridge\Domain\Model\UserEvent;
use BenGorUser\User\Domain\Model\Event\UserEvent as BaseUserEvent;
use Ddd\Domain\DomainEvent;
use Ddd\Domain\Event\PublishableDomainEvent;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of UserEvent class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UserEventSpec extends ObjectBehavior
{
    function it_builds_user_event(BaseUserEvent $event)
    {
        $dateTime = new \DateTimeImmutable();
        $event->occurredOn()->shouldBeCalled()->willReturn($dateTime);

        $this->beConstructedWith($event);
        $this->shouldHaveType(UserEvent::class);
        $this->shouldImplement(DomainEvent::class);
        $this->shouldImplement(PublishableDomainEvent::class);
        $this->event()->shouldReturn($event);
        $this->occurredOn()->shouldReturn($dateTime);
    }
}
