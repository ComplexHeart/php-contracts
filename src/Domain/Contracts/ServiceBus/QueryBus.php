<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Contracts\ServiceBus;

/**
 * Interface QueryBus
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Domain\Contracts\ServiceBus
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
