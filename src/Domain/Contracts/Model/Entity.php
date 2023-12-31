<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Contracts\Model;

/**
 * Interface Entity
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Domain\Contracts\Model
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
