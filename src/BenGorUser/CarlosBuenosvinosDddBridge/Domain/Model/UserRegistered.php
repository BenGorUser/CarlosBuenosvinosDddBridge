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

use BenGorUser\User\Domain\Model\Event\UserRegistered as BaseUserRegistered;
use Ddd\Domain\DomainEvent;
use Ddd\Domain\Event\PublishableDomainEvent;

/**
 * User registered domain event class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
final class UserRegistered implements UserEvent, DomainEvent, PublishableDomainEvent
{
    /**
     * The domain event.
     *
     * @var BaseUserRegistered
     */
    private $event;

    /**
     * Constructor.
     *
     * @param BaseUserRegistered $anEvent The domain event
     */
    public function __construct(BaseUserRegistered $anEvent)
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
