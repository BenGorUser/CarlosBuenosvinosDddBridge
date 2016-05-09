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
use BenGorUser\User\Domain\Model\User as BaseUser;
use Ddd\Domain\DomainEventPublisher;

/**
 * User domain class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class User extends BaseUser
{
    /**
     * {@inheritdoc}
     */
    protected function publish(BaseUserEvent $anEvent)
    {
        DomainEventPublisher::instance()->publish(
            new UserEvent($anEvent)
        );
    }
}
