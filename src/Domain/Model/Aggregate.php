<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Model;

use ComplexHeart\Domain\Events\EventBus;

/**
 * Interface Aggregate
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface Aggregate extends Entity
{
    /**
     * Publish the registered Domain Events.
     *
     *  $aggregate = new Aggregate();
     *  // do things and generate events
     *  $aggregate->publishDomainEvents($eventBus);
     */
    public function publishDomainEvents(EventBus $eventBus): void;
}
