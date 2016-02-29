<?php

namespace WyriHaximus\PhergieBot;

use Cake\Core\Configure;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use PipingBag\Di\PipingBag;

/**
 * @return LoopInterface
 */
function loopResolver()
{
    if (
        Configure::check('WyriHaximus.PhergieBot.loop') &&
        Configure::read('WyriHaximus.PhergieBot.loop') instanceof LoopInterface
    ) {
        return Configure::read('WyriHaximus.PhergieBot.loop');
    }

    if (class_exists('PipingBag\Di\PipingBag') && Configure::check('WyriHaximus.PhergieBot.pipingbag.loop')) {
        return PipingBag::get(Configure::read('WyriHaximus.PhergieBot.pipingbag.loop'));
    }

    return Factory::create();
}
