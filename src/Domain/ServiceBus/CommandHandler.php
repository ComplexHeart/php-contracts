<?php

declare(strict_types=1);

namespace ComplexHeart\Contracts\Domain\ServiceBus;

/**
 * Interface CommandHandler
 *
 * @author Unay Santisteban <usantisteban@othercode.es>
 * @package ComplexHeart\Contracts\Domain\ServiceBus
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