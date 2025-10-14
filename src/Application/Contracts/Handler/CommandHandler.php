<?php

declare(strict_types=1);

namespace ComplexHeart\Application\Contracts\Handler;

use ComplexHeart\Application\Contracts\Command\Command;

/**
 * Interface CommandHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.io>
 */
interface CommandHandler
{
    /**
     * Handle the command execution.
     */
    public function __invoke(Command $command): void;
}
