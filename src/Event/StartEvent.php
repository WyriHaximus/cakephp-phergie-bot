<?php

/**
 * This file is part of PhuninCake.
 *
 ** (c) 2015 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WyriHaximus\PhergieBot\Event;

use Cake\Event\Event;
use Phergie\Irc\Bot\React\Bot;
use React\EventLoop\LoopInterface;

class StartEvent extends Event
{
    const EVENT = 'WyriHaximus.PhergieBot.start';

    public static function create(LoopInterface $loop, Bot $bot)
    {
        return new static(static::EVENT, $bot, [
            'loop' => $loop,
            'bot' => $bot,
        ]);
    }

    /**
     * @return Node
     */
    public function getBot()
    {
        return $this->subject();
    }
}
