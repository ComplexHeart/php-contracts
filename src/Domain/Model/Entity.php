<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\Domain\Model;

/**
 * Interface Entity
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\Domain\Model
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
