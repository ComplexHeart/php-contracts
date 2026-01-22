# Contracts

[![Latest Stable Version](https://poser.pugx.org/complex-heart/contracts/v)](//packagist.org/packages/complex-heart/contracts)
[![Total Downloads](https://poser.pugx.org/complex-heart/contracts/downloads)](//packagist.org/packages/complex-heart/contracts)

Common interfaces for PHP Complex Heart SDK.

## Domain Layer

### Model
Core building blocks for domain-driven design:
- **Aggregate** - Root entity with domain event publishing
- **Entity** - Domain object with unique identity
- **ValueObject** - Immutable domain value with equality
- **Identifier** - Unique identifier representation

### Events
Domain event interfaces following ISP (Interface Segregation Principle):
- **Event** - Base domain event (eventId, eventName, payload, occurredOn)
- **Traceable** - Distributed tracing (correlationId, causationId)
- **Sourceable** - Event sourcing (aggregateId, aggregateType, eventVersion)
- **EventBus** - Publishes domain events

## Application Layer

### Command
Write operations (CQRS):
- **Command** - Marker interface for state-changing operations
- **CommandBus** - Dispatches commands to handlers
- **CommandHandler** - Executes commands

### Query
Read operations (CQRS):
- **Query** - Marker interface for data retrieval
- **QueryResponse** - Marker interface for query results
- **QueryBus** - Routes queries to handlers
- **QueryHandler** - Executes queries and returns responses

### Handler
Event handlers:
- **EventHandler** - Reacts to domain events

### Service Bus
Unified message bus facade:
- **ServiceBus** - Provides access to CommandBus, QueryBus, and EventBus

## Architecture

This library follows Clean Architecture principles with explicit layer separation:
- **Domain → Application** - Domain layer is independent, Application depends on Domain
- **Layer-Explicit Namespaces** - Clear architectural boundaries in namespace structure
- **Interface Segregation** - Compose only needed capabilities (e.g., Event + Traceable + Sourceable)

### Architecture Testing

The project includes automated architecture tests using Pest PHP:

```bash
composer test
```

Tests enforce:
- Domain layer independence (no Application dependencies)
- Correct interface placement and usage
- Clean Architecture dependency rules
- PHP and security best practices (via arch presets)
