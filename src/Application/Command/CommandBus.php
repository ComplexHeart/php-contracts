<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Command;

/**
 * Interface CommandBus
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface CommandBus
{
    /**
     * Dispatch the given command.
     */
    public function dispatch(Command $command): void;
}
