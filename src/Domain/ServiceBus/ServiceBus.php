<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\Domain\ServiceBus;

/**
 * Interface ServiceBus
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\Domain\ServiceBus
 */
interface ServiceBus
{
    /**
     * Return the Command Bus implementation.
     *
     * @return CommandBus
     */
    public function commandBus(): CommandBus;

    /**
     * Return the Query Bus implementation.
     *
     * @return QueryBus
     */
    public function queryBus(): QueryBus;

    /**
     * Return the Event Bus implementation.
     *
     * @return EventBus
     */
    public function eventBus(): EventBus;
}