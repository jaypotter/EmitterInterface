<?php

declare(strict_types=1);

namespace Potter\Event\Emitter;

use \Psr\EventDispatcher\EventDispatcherInterface;

abstract class AbstractEmitter implements EmitterInterface
{
    abstract public function getEventDispatcher(): EventDispatcherInterface;
}