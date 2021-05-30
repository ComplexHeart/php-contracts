<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\Domain\ServiceBus;

/**
 * Interface Event
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\Domain\ServiceBus
 */
interface Event
{
    /**
     * The unique id for the current domain event (UUID).
     *
     * @return string
     */
    public function eventId(): string;

    /**
     * The unique domain event name, commonly is a dotted string.
     *
     * i.e: this.object.event.name
     *
     * @return string
     */
    public function eventName(): string;

    /**
     * The aggregate id that has registered the domain event (UUID).
     *
     * @return string
     */
    public function aggregateId(): string;

    /**
     * Returns the event payload.
     *
     * @return array<string, mixed>
     */
    public function payload(): array;

    /**
     * The timestamp on when the domain event is registered in ISO-8601.
     *
     * i.e: 2005-08-15T15:52:01+0000
     *
     * @return string
     */
    public function occurredOn(): string;
}