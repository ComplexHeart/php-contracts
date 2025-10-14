<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Contracts\Handler;

use ComplexHeart\Application\Contracts\Query\Query;
use ComplexHeart\Application\Contracts\Query\QueryResponse;

/**
 * Interface QueryHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface QueryHandler
{
    /**
     * Handle the query execution.
     */
    public function __invoke(Query $query): QueryResponse;
}
