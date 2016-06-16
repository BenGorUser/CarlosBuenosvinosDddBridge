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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Domain\Event;

use BenGorUser\CarlosBuenosvinosDddBridge\Domain\Event\UserEventSubscriber;
use BenGorUser\CarlosBuenosvinosDddBridge\Domain\Model\UserEvent;
use BenGorUser\User\Domain\Event\UserEventSubscriber as BaseUserEventSubscriber;
use BenGorUser\User\Domain\Model\Event\UserEvent as BaseUserEvent;
use Ddd\Domain\DomainEventSubscriber;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of UserEventSubscriber class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UserEventSubscriberSpec extends ObjectBehavior
{
    function it_handles_an_event(BaseUserEventSubscriber $subscriber, UserEvent $userEvent, BaseUserEvent $event)
    {
        $this->beConstructedWith($subscriber);
        $this->shouldHaveType(UserEventSubscriber::class);
        $this->shouldImplement(DomainEventSubscriber::class);

        $userEvent->event()->shouldBeCalled()->willReturn($event);

        $this->handle($userEvent);
        $this->isSubscribedTo($userEvent);
    }
}
