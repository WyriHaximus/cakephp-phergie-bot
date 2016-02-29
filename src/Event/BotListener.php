<?php

/*
 * This file is part of PhergieBot.
 *
 ** (c) 2016 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WyriHaximus\PhuninCake\Event;

use Cake\Event\EventListenerInterface;
use WyriHaximus\PhergieBot\Event\ConstructEvent;
use WyriHaximus\PhuninNode\Plugins;

class BotListener implements EventListenerInterface
{

    public function implementedEvents()
    {
        return [
            ConstructEvent::EVENT => 'construct',
        ];
    }

    public function construct(ConstructEvent $event)
    {
        // @todo, setup and start bot here
    }
}
