<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Contracts\Handler;

use ComplexHeart\Domain\Contracts\Events\Event;

/**
 * Interface EventHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface EventHandler
{
    /**
     * Handle the event execution.
     */
    public function __invoke(Event $event): void;
}
