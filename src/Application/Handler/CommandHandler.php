<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Handler;

use ComplexHeart\Application\Command\Command;

/**
 * Interface CommandHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 * @package ComplexHeart\Application\Handler
 */
interface CommandHandler
{
    /**
     * Handle the command execution.
     *
     * @param  Command  $command
     */
    public function __invoke(Command $command): void;
}
