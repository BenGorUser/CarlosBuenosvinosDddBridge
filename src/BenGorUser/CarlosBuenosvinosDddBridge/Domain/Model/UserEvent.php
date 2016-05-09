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

use BenGorUser\User\Domain\Model\Event\UserEvent as BaseUserEvent;
use Ddd\Domain\DomainEvent;
use Ddd\Domain\Event\PublishableDomainEvent;

/**
 * User domain event class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 * @author Gorka Laucirica <gorka.lauzirika@gmail.com>
 */
class UserEvent implements DomainEvent, PublishableDomainEvent
{
    /**
     * The domain event.
     *
     * @var BaseUserEvent
     */
    private $event;

    /**
     * Constructor.
     *
     * @param BaseUserEvent $anEvent The domain event
     */
    public function __construct(BaseUserEvent $anEvent)
    {
        $this->event = $anEvent;
    }

    /**
     * Gets the domain event.
     *
     * @return BaseUserEvent
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
