# congraph/contracts

`congraph/contracts` contains the shared PHP interfaces used across the Congraph package ecosystem.

## What this package provides

- repository contracts
- command/validation contracts
- cross-package interfaces that let packages depend on abstractions instead of concrete implementations

This package has no database schema, no Laravel service provider, and no runtime behavior by itself.

## When to use it

Use this package when:

- a package needs to type-hint another package's repository or service
- you are adding a new reusable abstraction to Congraph
- you want to decouple command handlers, validators, or services from implementation details

## Installation

```bash
composer require congraph/contracts
```

## Package structure

Most interfaces live under namespaces like:

- `Congraph\Contracts\Core`
- `Congraph\Contracts\Eav`
- `Congraph\Contracts\Filesystem`
- `Congraph\Contracts\Locales`
- `Congraph\Contracts\Workflows`

## Development

This package is intentionally small. Changes here ripple into the rest of the monorepo.

When editing contracts:

1. update the interface
2. verify all implementations in other packages still match
3. run the dependent package test suites

## Testing

This package does not currently ship its own PHPUnit suite. Validation happens through the dependent packages.

From the monorepo root:

```bash
composer test
```

## Contribution notes

- keep interfaces minimal
- avoid framework-specific details in contracts
- prefer additive changes over breaking signature changes
- if a signature must change, update all implementing packages in the same branch
