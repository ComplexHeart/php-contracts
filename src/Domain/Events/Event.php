<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Events;

/**
 * Interface Event
 *
 * Represents a domain event - something that happened in the domain.
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface Event
{
    /**
     * The unique id for the current domain event (UUID).
     */
    public function eventId(): string;

    /**
     * The unique domain event name, commonly is a dotted string.
     *
     * Examples: order.placed, user.registered, payment.processed
     */
    public function eventName(): string;

    /**
     * Returns the event payload.
     *
     * @return array<string, mixed>
     */
    public function payload(): array;

    /**
     * The timestamp when the domain event occurred in ISO-8601.
     *
     * Example: 2005-08-15T15:52:01+0000
     */
    public function occurredOn(): string;
}
