<?php

declare(strict_types=1);

namespace Potter\Event\Emitter;

use \Psr\EventDispatcher\EventDispatcherInterface;

interface EmitterInterface 
{
    public function getEventDispatcher(): EventDispatcherInterface;
}