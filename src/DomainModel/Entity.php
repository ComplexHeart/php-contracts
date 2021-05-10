<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\DomainModel;

/**
 * Interface Entity
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\DomainModel
 */
interface Entity
{
    /**
     * Return the Identifier instance.
     *
     * @return Identifier
     */
    public function id(): Identifier;
}
