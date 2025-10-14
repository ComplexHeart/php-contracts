<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Events;

/**
 * Interface EventBus
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface EventBus
{
    /**
     * Publish event list.
     */
    public function publish(Event ...$events): void;
}
