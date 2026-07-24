# Contributing

Thank you for considering a contribution to EventOS.

## Development Principles

- Keep the core small and maintainable.
- Prefer clear domain boundaries over large generic classes.
- Write secure code by default.
- Add tests for business rules and risky behavior.
- Document user-facing and developer-facing changes.

## Branches

- `main`: stable code
- `develop`: integration branch
- `feature/*`: new features
- `fix/*`: bug fixes
- `hotfix/*`: urgent production fixes

## Commit Style

Use short, descriptive commit messages. Conventional Commits are recommended:

```text
feat: add authentication foundation
fix: validate event dates
docs: document local installation
```

## Pull Requests

Each pull request should include:

- A clear summary of the change.
- Any relevant issue or discussion.
- Tests or validation performed.
- Screenshots for interface changes.

## Local Checks

Before opening a pull request, run:

```bash
composer test
composer analyse
composer format:check
```
