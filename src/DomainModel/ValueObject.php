<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\DomainModel;

/**
 * Interface ValueObject
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\DomainModel
 */
interface ValueObject
{
    /**
     * Return the attribute values.
     *
     * @return array
     */
    public function values(): array;

    /**
     * Compare $this object with $other object.
     *
     * @param  object  $other
     *
     * @return bool
     */
    public function equals(object $other): bool;
}
