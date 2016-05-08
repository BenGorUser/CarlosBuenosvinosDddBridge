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

namespace BenGorUser\CarlosBuenosvinosDddBridge\Domain\Model;

use BenGorUser\User\Domain\Model\Event\UserLoggedOut as BaseUserLoggedOut;
use Ddd\Domain\DomainEvent;
use Ddd\Domain\Event\PublishableDomainEvent;

/**
 * User logged out domain event class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
final class UserLoggedOut implements UserEvent, DomainEvent, PublishableDomainEvent
{
    /**
     * The domain event.
     *
     * @var BaseUserLoggedOut
     */
    private $event;

    /**
     * Constructor.
     *
     * @param BaseUserLoggedOut $anEvent The domain event
     */
    public function __construct(BaseUserLoggedOut $anEvent)
    {
        $this->event = $anEvent;
    }

    /**
     * {@inheritdoc}
     */
    public function event()
    {
        return $this->event;
    }

    /**
     * {@inheritdoc}
     */
    public function occurredOn()
    {
        return $this->event->occurredOn();
    }
}
