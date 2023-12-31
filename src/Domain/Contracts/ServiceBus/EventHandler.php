<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Contracts\ServiceBus;

/**
 * Interface EventHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Domain\Contracts\ServiceBus
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
