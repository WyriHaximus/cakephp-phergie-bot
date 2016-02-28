<?php

namespace WyriHaximus\Tests\PhergieBot\Shell;

use Cake\Core\Configure;
use Cake\TestSuite\TestCase;
use Phake;
use React\EventLoop\LoopInterface;
use WyriHaximus\PhergieBot\Shell\BotShell;

class BotShellTest extends TestCase
{
    public function testLoopResolverConfigure()
    {
        $loop = Phake::mock(LoopInterface::class);
        Configure::write('WyriHaximus.PhergieBot.loop', $loop);
        (new BotShell())->start();
        Phake::verify($loop)->run();
    }
}
