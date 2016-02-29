<?php

/*
 * This file is part of PhergieBot.
 *
 ** (c) 2016 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WyriHaximus\PhergieBot\Shell;

use Cake\Console\Shell;
use Cake\Core\Configure;
use Cake\Event\EventManager;
use React\EventLoop\LoopInterface;
use WyriHaximus\PhergieBot\Event\ConstructEvent;

class BotShell extends Shell
{
    /**
     * @var LoopInterface
     */
    public $loop;

    public function start()
    {
        $this->loop = \WyriHaximus\PhergieBot\loopResolver();

        EventManager::instance()->dispatch(ConstructEvent::create($this->loop));

        $this->loop->run();
    }
}
