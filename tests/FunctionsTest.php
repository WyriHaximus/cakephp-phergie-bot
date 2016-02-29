<?php

namespace WyriHaximus\Tests\PhergieBot\Shell;

use Cake\Core\Configure;
use Cake\TestSuite\TestCase;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;

class FunctionsTest extends TestCase
{
    public function testLoopResolver()
    {
        $this->assertInstanceOf(LoopInterface::class, \WyriHaximus\PhergieBot\loopResolver());
    }

    public function testLoopResolverConfigure()
    {
        $loop = Factory::create();
        Configure::write('WyriHaximus.PhergieBot.loop', $loop);
        $this->assertInstanceOf(LoopInterface::class, \WyriHaximus\PhergieBot\loopResolver());
        $this->assertSame($loop, \WyriHaximus\PhergieBot\loopResolver());
    }
}
