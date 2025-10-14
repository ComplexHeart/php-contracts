<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Handler;

use ComplexHeart\Application\Query\Query;
use ComplexHeart\Application\Query\QueryResponse;

/**
 * Interface QueryHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 * @package ComplexHeart\Application\Handler
 */
interface QueryHandler
{
    /**
     * Handle the query execution.
     *
     * @param  Query  $query
     *
     * @return QueryResponse
     */
    public function __invoke(Query $query): QueryResponse;
}
