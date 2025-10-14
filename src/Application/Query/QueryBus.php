<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Query;

/**
 * Interface QueryBus
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface QueryBus
{
    /**
     * Ask the given query.
     */
    public function ask(Query $query): QueryResponse;
}
