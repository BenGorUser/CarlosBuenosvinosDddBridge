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

use BenGorUser\CarlosBuenosvinosDddBridge\Infrastructure\Application\Service\SqlSession;
use Ddd\Application\Service\TransactionalSession;
use PhpSpec\ObjectBehavior;

/**
 * Spec file of SqlSession class.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SqlSessionSpec extends ObjectBehavior
{
    function let(\PDO $pdo)
    {
        $this->beConstructedWith($pdo);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(SqlSession::class);
    }

    function it_implements_transactional_session()
    {
        $this->shouldImplement(TransactionalSession::class);
    }

    function it_executes_atomically(\PDO $pdo)
    {
        $pdo->beginTransaction()->shouldBeCalled()->willReturn(true);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION)->shouldBeCalled()->willReturn(true);
        $pdo->commit()->shouldBeCalled()->willReturn(true);

        $this->executeAtomically(function () {
            return 'callback result';
        })->shouldReturn('callback result');
    }
}
