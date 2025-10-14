<?php

declare(strict_types=1);

arch('Domain layer does not depend on Application layer')
    ->expect('ComplexHeart\Domain')
    ->not->toUse('ComplexHeart\Application');

arch('Application layer can depend on Domain layer')
    ->expect('ComplexHeart\Application')
    ->toUse('ComplexHeart\Domain');

arch('Domain Model interfaces are correctly placed')
    ->expect('ComplexHeart\Domain\Model')
    ->toBeInterfaces()
    ->toOnlyBeUsedIn([
        'ComplexHeart\Domain\Model',
        'ComplexHeart\Domain\Events',
        'ComplexHeart\Application',
    ]);

arch('Domain Event interfaces are correctly placed')
    ->expect('ComplexHeart\Domain\Events')
    ->toBeInterfaces()
    ->toOnlyBeUsedIn([
        'ComplexHeart\Domain',
        'ComplexHeart\Application',
    ]);

arch('Application Command interfaces are correctly placed')
    ->expect('ComplexHeart\Application\Command')
    ->toBeInterfaces()
    ->toOnlyBeUsedIn([
        'ComplexHeart\Application',
    ]);

arch('Application Query interfaces are correctly placed')
    ->expect('ComplexHeart\Application\Query')
    ->toBeInterfaces()
    ->toOnlyBeUsedIn([
        'ComplexHeart\Application',
    ]);

arch('Application Handler interfaces are correctly placed')
    ->expect('ComplexHeart\Application\Handler')
    ->toBeInterfaces()
    ->toOnlyBeUsedIn([
        'ComplexHeart\Application',
    ]);

arch('Application Messaging interfaces are correctly placed')
    ->expect('ComplexHeart\Application\Messaging')
    ->toBeInterfaces()
    ->toOnlyBeUsedIn([
        'ComplexHeart\Application',
        'ComplexHeart\Domain\Model', // Aggregate uses EventBus
    ]);

arch('all interfaces are suffixed correctly')
    ->expect('ComplexHeart')
    ->classes()
    ->toBeInterfaces();

arch()->preset()->php();
arch()->preset()->security();
