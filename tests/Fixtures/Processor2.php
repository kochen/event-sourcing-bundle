<?php

namespace Patchlevel\EventSourcingBundle\Tests\Fixtures;

use Patchlevel\EventSourcing\Aggregate\AggregateChanged;
use Patchlevel\EventSourcing\EventBus\Listener;

class Processor2 implements Listener
{
    public function __invoke(AggregateChanged $event): void
    {
        // do nothing
    }
}