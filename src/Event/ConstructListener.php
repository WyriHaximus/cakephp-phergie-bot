<?php

/*
 * This file is part of PhuninCake.
 *
 ** (c) 2013 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WyriHaximus\PhergieBot\Event;

use Cake\Core\Configure;
use Cake\Event\EventListenerInterface;
use Cake\Event\EventManager;
use Phergie\Irc\Bot\React\Bot;
use Phergie\Irc\Client\React\Client;

class ConstructListener implements EventListenerInterface
{
    /**
     * @return array
     */
    public function implementedEvents()
    {
        return [
            ConstructEvent::EVENT => 'construct',
        ];
    }

    /**
     * @param ConstructEvent $event
     */
    public function construct(ConstructEvent $event)
    {
        $client = new Client();
        $client->setLoop($event->getLoop());
        $bot = new Bot();
        $bot->setConfig(Configure::read('WyriHaximus.Phergie.config'));
        $bot->setClient($client);
        $bot->run(false);
        EventManager::instance()->dispatch(StartEvent::create($event->getLoop(), $bot));
    }
}
