<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Contracts\Model;

use ComplexHeart\Domain\Contracts\ServiceBus\EventBus;

/**
 * Interface Aggregate
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Domain\Contracts\Model
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
