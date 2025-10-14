<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Contracts;

use ComplexHeart\Application\Contracts\Command\CommandBus;
use ComplexHeart\Application\Contracts\Query\QueryBus;
use ComplexHeart\Domain\Contracts\Events\EventBus;

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
