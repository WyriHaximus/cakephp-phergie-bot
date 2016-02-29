<?php

/**
 * This file is part of PhergieBot.
 *
 ** (c) 2016 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\PhergieBot\Event;

use Cake\Event\Event;
use React\EventLoop\LoopInterface;
use WyriHaximus\TwigView\View\TwigView;

class ConstructEvent extends Event
{
    const EVENT = 'WyriHaximus.PhergieBot.construct';

    /**
     * @param LoopInterface $loop
     * @return static
     */
    public static function create(LoopInterface $loop)
    {
        return new static(static::EVENT, $loop, [
            'loop' => $loop,
        ]);
    }

    /**
     * @return LoopInterface
     */
    public function getLoop()
    {
        return $this->data()['loop'];
    }
}
