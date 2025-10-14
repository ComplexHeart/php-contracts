<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Messaging;

use ComplexHeart\Domain\Events\Event;

/**
 * Interface EventBus
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 * @package ComplexHeart\Application\Messaging
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
