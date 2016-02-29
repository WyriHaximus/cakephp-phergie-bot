<?php

/**
 * This file is part of PhergieBot.
 *
 ** (c) 2016 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\Tests\PhergieBot\Event;

use Cake\TestSuite\TestCase;
use Phake;
use React\EventLoop\LoopInterface;
use WyriHaximus\PhergieBot\Event\ConstructEvent;

class ConstructEventTest extends TestCase
{
    public function testCreate()
    {
        $loop = Phake::mock(LoopInterface::class);
        $event = ConstructEvent::create($loop);

        $this->assertEquals($loop, $event->getLoop());
    }
}
