<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\DomainModel;

use ComplexHeart\Contracts\ServiceBus\EventBus;

/**
 * Interface Aggregate
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\DomainModel
 */
interface Aggregate extends Entity
{
    /**
     * Publish the registered Domain Events.
     *
     *  $aggregate = new Aggregate();
     *  // do things and generate events
     *  $aggregate->publishDomainEvents($eventBus);
     *
     * @param  EventBus  $eventBus
     * @return void
     */
    public function publishDomainEvents(EventBus $eventBus): void;
}
