<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Handler;

use ComplexHeart\Domain\Events\Event;

/**
 * Interface EventHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 * @package ComplexHeart\Application\Handler
 */
interface EventHandler
{
    /**
     * Handle the event execution.
     *
     * @param  Event  $event
     */
    public function __invoke(Event $event): void;
}
