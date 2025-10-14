# Contracts

[![Latest Stable Version](https://poser.pugx.org/complex-heart/contracts/v)](//packagist.org/packages/complex-heart/contracts)
[![Total Downloads](https://poser.pugx.org/complex-heart/contracts/downloads)](//packagist.org/packages/complex-heart/contracts)
[![License](https://poser.pugx.org/complex-heart/contracts/license)](//packagist.org/packages/complex-heart/contracts)

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

## Application Layer

### Command
Write operations (CQRS):
- **Command** - Marker interface for state-changing operations

### Query
Read operations (CQRS):
- **Query** - Marker interface for data retrieval
- **QueryResponse** - Marker interface for query results

### Handler
Message handlers:
- **CommandHandler** - Executes commands
- **QueryHandler** - Executes queries and returns responses
- **EventHandler** - Reacts to domain events

### Messaging
Message bus implementations:
- **CommandBus** - Dispatches commands
- **QueryBus** - Asks queries
- **EventBus** - Publishes events
- **ServiceBus** - Unified bus facade
