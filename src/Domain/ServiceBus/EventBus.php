<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\Domain\ServiceBus;

/**
 * Interface EventBus
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\Domain\ServiceBus
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
