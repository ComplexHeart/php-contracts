<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Contracts\ServiceBus;

/**
 * Interface QueryHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Domain\Contracts\ServiceBus
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
