<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\ServiceBus;

/**
 * Interface CommandBus
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\ServiceBus
 */
interface CommandBus
{
    /**
     * Dispatch the given command.
     *
     * @param  Command  $command
     */
    public function dispatch(Command $command): void;
}
