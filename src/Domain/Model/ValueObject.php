<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Model;

/**
 * Interface ValueObject
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface ValueObject
{
    /**
     * Return the attribute values.
     *
     * @return array<string, mixed>
     */
    public function values(): array;

    /**
     * Compare $this object with $other object.
     */
    public function equals(object $other): bool;
}
