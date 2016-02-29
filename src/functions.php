<?php

namespace WyriHaximus\CakePHP\Phergie;

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
        Configure::check('WyriHaximus.Phergie.loop') &&
        Configure::read('WyriHaximus.Phergie.loop') instanceof LoopInterface
    ) {
        return Configure::read('WyriHaximus.Phergie.loop');
    }

    if (class_exists('PipingBag\Di\PipingBag') && Configure::check('WyriHaximus.Phergie.pipingbag.loop')) {
        return PipingBag::get(Configure::read('WyriHaximus.Phergie.pipingbag.loop'));
    }

    return Factory::create();
}
