<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Messaging;

use ComplexHeart\Application\Query\Query;
use ComplexHeart\Application\Query\QueryResponse;

/**
 * Interface QueryBus
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 * @package ComplexHeart\Application\Messaging
 */
interface QueryBus
{
    /**
     * Ask the given query.
     *
     * @param  Query  $query
     *
     * @return QueryResponse
     */
    public function ask(Query $query): QueryResponse;
}
