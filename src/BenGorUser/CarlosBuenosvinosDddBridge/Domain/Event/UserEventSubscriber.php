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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Domain\Event;

use BenGorUser\CarlosBuenosvinosDddBridge\Domain\Model\UserEvent;
use BenGorUser\User\Domain\Event\UserEventSubscriber as BaseUserEventSubscriber;
use Ddd\Domain\DomainEventSubscriber;

/**
 * User event subscriber class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UserEventSubscriber implements DomainEventSubscriber
{
    /**
     * The domain event subscriber.
     *
     * @var BaseUserEventSubscriber
     */
    private $subscriber;

    /**
     * Constructor.
     *
     * @param BaseUserEventSubscriber $aSubscriber The domain event subscriber
     */
    public function __construct(BaseUserEventSubscriber $aSubscriber)
    {
        $this->subscriber = $aSubscriber;
    }

    /**
     * {@inheritdoc}
     *
     * @param UserEvent $aDomainEvent The domain event
     */
    public function handle($aDomainEvent)
    {
        $this->subscriber->handle($aDomainEvent->event());
    }

    /**
     * {@inheritdoc}
     *
     * @param UserEvent $aDomainEvent The domain event
     */
    public function isSubscribedTo($aDomainEvent)
    {
        $this->subscriber->isSubscribedTo($aDomainEvent->event());
    }
}
