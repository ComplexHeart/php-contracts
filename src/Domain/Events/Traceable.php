<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Events;

/**
 * Interface Traceable
 *
 * Extends events with distributed tracing capabilities.
 * Use when you need to trace event flows across microservices.
 *
 * Enables:
 * - Distributed tracing across services
 * - Event chain reconstruction
 * - Root cause analysis
 * - APM tool integration (Datadog, New Relic, Zipkin)
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface Traceable
{
    /**
     * The correlation ID that traces the entire request/workflow.
     *
     * The same correlation ID flows through all services and events
     * in a single business transaction, enabling end-to-end tracing.
     *
     * Example flow:
     * - HTTP Request (correlationId: abc-123)
     * - OrderPlaced event (correlationId: abc-123)
     * - PaymentRequested event (correlationId: abc-123)
     * - PaymentProcessed event (correlationId: abc-123)
     *
     * Use cases:
     * - Distributed tracing across microservices
     * - Debugging async workflows
     * - APM tools integration
     * - Request flow visualization
     *
     * @return string UUID or custom trace ID
     */
    public function correlationId(): string;

    /**
     * The causation ID - the immediate parent event that caused this event.
     *
     * Forms a causal chain showing parent-child relationships between events.
     * Each event's causationId points to the eventId of its immediate parent.
     *
     * Example chain:
     * - OrderPlaced (eventId: ev-001, causationId: null)
     *   ↓
     * - PaymentRequested (eventId: ev-002, causationId: ev-001)
     *   ↓
     * - PaymentProcessed (eventId: ev-003, causationId: ev-002)
     *
     * Use cases:
     * - Event chain reconstruction
     * - Root cause analysis (trace back to origin)
     * - Understanding event dependencies
     * - Building event graphs and visualizations
     *
     * @return string Event ID of the parent event that triggered this event
     */
    public function causationId(): string;
}
