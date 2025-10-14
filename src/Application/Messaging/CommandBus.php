<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Messaging;

use ComplexHeart\Application\Command\Command;

/**
 * Interface CommandBus
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 * @package ComplexHeart\Application\Messaging
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
