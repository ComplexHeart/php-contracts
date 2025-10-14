<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Model;

/**
 * Interface Entity
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 * @package ComplexHeart\Domain\Model
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
