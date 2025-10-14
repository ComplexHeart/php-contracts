<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Events;

/**
 * Interface Sourceable
 *
 * Extends events with explicit aggregate context for event sourcing.
 * Use when events are sourced from aggregates and stored in event stores.
 *
 * This interface provides explicit aggregate identification and versioning,
 * eliminating the need for convention-based extraction from payload.
 *
 * Enables:
 * - Event sourcing and event stores
 * - Aggregate reconstruction from events
 * - Schema evolution and versioning
 * - Event store stream organization
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 * @package ComplexHeart\Domain\Events
 */
interface Sourceable
{
    /**
     * The unique identifier of the aggregate that emitted this event.
     *
     * This method provides explicit aggregate identification rather than
     * relying on convention-based extraction from the payload, offering:
     * - Type safety (guaranteed string, not array lookup)
     * - IDE support (autocomplete, type hints, refactoring)
     * - Contract enforcement at compile time
     * - Clear event store stream naming
     *
     * Event stores typically use this to build stream names:
     * Stream name = aggregateType() . "-" . aggregateId()
     *
     * Example:
     * For an Order aggregate with ID "order-123", this returns "order-123"
     * Stream name becomes: "Order-order-123"
     *
     * @return string The aggregate identifier (UUID, integer, or custom ID)
     */
    public function aggregateId(): string;

    /**
     * The type of aggregate that emitted this event.
     *
     * Identifies which aggregate class/type this event belongs to.
     * Used by event stores for stream organization and aggregate reconstruction.
     *
     * Typical values (choose what works for your event store):
     * - Fully qualified class name: "App\\Domain\\Order\\Order"
     * - Short class name: "Order"
     * - Type identifier: "order"
     * - Custom identifier: "sales.order"
     *
     * Consistency is key - use the same format across all events.
     *
     * @return string The aggregate type identifier
     */
    public function aggregateType(): string;

    /**
     * The schema version of this event.
     *
     * Critical for event sourcing systems where events are stored permanently
     * and aggregates must be rebuilt from historical events over time.
     *
     * Versioning strategies:
     * - Semantic versioning: "1.0.0", "1.1.0", "2.0.0"
     * - Simple incrementing: "1", "2", "3"
     * - Date-based: "2024-01-15", "2025-10-14"
     *
     * When to increment the version:
     * - Adding new fields: minor version (1.0 → 1.1)
     * - Removing fields: major version (1.0 → 2.0)
     * - Changing field types: major version (1.0 → 2.0)
     * - Renaming fields: major version (1.0 → 2.0)
     *
     * Event stores use this for:
     * - Upcasting old events to new schema
     * - Maintaining multiple versions simultaneously
     * - Migration strategies and backward compatibility
     *
     * Example evolution:
     * - OrderPlaced v1.0: {orderId, total}
     * - OrderPlaced v1.1: {orderId, total, customerId} (added field)
     * - OrderPlaced v2.0: {orderId, total, customerId, items[]} (added array)
     *
     * @return string Version identifier (semantic, numeric, or date-based)
     */
    public function eventVersion(): string;
}
