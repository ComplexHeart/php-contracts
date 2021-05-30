<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\Domain\ServiceBus;

/**
 * Interface QueryHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\Domain\ServiceBus
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