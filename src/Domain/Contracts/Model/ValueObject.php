<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Contracts\Model;

/**
 * Interface ValueObject
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Domain\Contracts\Model
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
     *
     * @param  object  $other
     *
     * @return bool
     */
    public function equals(object $other): bool;
}
