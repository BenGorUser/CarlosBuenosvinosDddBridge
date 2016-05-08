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

use BenGorUser\User\Domain\Event\UserInvitedMailerSubscriber as BaseUserInvitedMailerSubscriber;
use Ddd\Domain\DomainEventSubscriber;

/**
 * User invited mailer subscriber class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class UserInvitedMailerSubscriber implements DomainEventSubscriber
{
    /**
     * The domain event subscriber.
     *
     * @var BaseUserInvitedMailerSubscriber
     */
    private $subscriber;

    /**
     * Constructor.
     *
     * @param BaseUserInvitedMailerSubscriber $aSubscriber The domain event subscriber
     */
    public function __construct(BaseUserInvitedMailerSubscriber $aSubscriber)
    {
        $this->subscriber = $aSubscriber;
    }

    /**
     * {@inheritdoc}
     */
    public function handle($aDomainEvent)
    {
        $this->subscriber->handle($aDomainEvent->event());
    }

    /**
     * {@inheritdoc}
     */
    public function isSubscribedTo($aDomainEvent)
    {
        $this->subscriber->isSubscribedTo($aDomainEvent->event());
    }
}
