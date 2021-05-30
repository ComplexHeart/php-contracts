<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\Domain\ServiceBus;

/**
 * Interface EventHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\Domain\ServiceBus
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