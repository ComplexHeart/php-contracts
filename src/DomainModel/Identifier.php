<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\DomainModel;

/**
 * Interface Identifier
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\DomainModel
 */
interface Identifier
{
    /**
     * Return the id value.
     *  $id->value() // "7a79bffb-4b4e-4d82-932e-c1524723622b"
     *  $id->value() // "459"
     *
     * @return string
     */
    public function value(): string;

    /**
     * Represents the id as string.
     *
     * @return string
     */
    public function __toString(): string;
}
