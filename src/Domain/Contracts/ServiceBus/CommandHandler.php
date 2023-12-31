<?php

declare(strict_types=1);

namespace ComplexHeart\Domain\Contracts\ServiceBus;

/**
 * Interface CommandHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Domain\Contracts\ServiceBus
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
