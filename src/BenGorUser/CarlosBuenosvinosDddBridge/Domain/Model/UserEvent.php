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

/**
 * Base User event domain class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
interface UserEvent
{
    /**
     * Gets the user event.
     *
     * @return BaseUserEvent
     */
    public function event();
}
