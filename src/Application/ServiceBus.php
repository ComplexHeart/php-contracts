<?php

declare(strict_types=1);

namespace ComplexHeart\Application;

use ComplexHeart\Application\Command\CommandBus;
use ComplexHeart\Application\Query\QueryBus;
use ComplexHeart\Domain\Events\EventBus;

/**
 * Interface ServiceBus
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface ServiceBus
{
    /**
     * Return the Command Bus implementation.
     */
    public function commandBus(): CommandBus;

    /**
     * Return the Query Bus implementation.
     */
    public function queryBus(): QueryBus;

    /**
     * Return the Event Bus implementation.
     */
    public function eventBus(): EventBus;
}
