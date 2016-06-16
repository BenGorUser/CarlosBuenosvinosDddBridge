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

namespace spec\BenGorUser\CarlosBuenosvinosDddBridge\Infrastructure\Application\Service;

use BenGorUser\CarlosBuenosvinosDddBridge\Infrastructure\Application\Service\DoctrineODMMongoDBSession;
use Ddd\Application\Service\TransactionalSession;
use Doctrine\Common\Persistence\ObjectManager;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of DoctrineODMMongoDBSession class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class DoctrineODMMongoDBSessionSpec extends ObjectBehavior
{
    function let(ObjectManager $manager)
    {
        $this->beConstructedWith($manager);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DoctrineODMMongoDBSession::class);
    }

    function it_implements_transactional_session()
    {
        $this->shouldImplement(TransactionalSession::class);
    }

    function it_executes_atomically(ObjectManager $manager)
    {
        $manager->flush()->shouldBeCalled();

        $this->executeAtomically(function () {
            return 'callback result';
        })->shouldReturn('callback result');
    }
}
