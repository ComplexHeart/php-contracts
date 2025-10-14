<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Model;

/**
 * Interface Entity
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface Entity
{
    /**
     * Return the Identifier instance.
     */
    public function id(): Identifier;
}
