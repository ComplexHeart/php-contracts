<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Contracts\ServiceBus;

/**
 * Interface EventBus
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Domain\Contracts\ServiceBus
 */
interface EventBus
{
    /**
     * Publish event list.
     *
     * @param  Event  ...$events
     */
    public function publish(Event ...$events): void;
}
