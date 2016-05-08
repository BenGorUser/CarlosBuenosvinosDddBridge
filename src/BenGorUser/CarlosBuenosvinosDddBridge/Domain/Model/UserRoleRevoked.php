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

use BenGorUser\CarlosBuenosvinosDddBridge\Domain\Model\UserRoleRevoked as BaseUserRoleRevoked;
use Ddd\Domain\DomainEvent;
use Ddd\Domain\Event\PublishableDomainEvent;

/**
 * User role revoked domain event class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
final class UserRoleRevoked implements UserEvent, DomainEvent, PublishableDomainEvent
{
    /**
     * The domain event.
     *
     * @var BaseUserRoleRevoked
     */
    private $event;

    /**
     * Constructor.
     *
     * @param BaseUserRoleRevoked $anEvent The domain event
     */
    public function __construct(BaseUserRoleRevoked $anEvent)
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
