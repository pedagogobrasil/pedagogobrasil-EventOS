# Security Policy

Security is a core requirement for EventOS.

## Supported Versions

EventOS is in early development. Until the first stable release, security fixes will target the `main` branch.

## Reporting a Vulnerability

Please do not open public issues for sensitive vulnerabilities.

Report security concerns privately to the repository owner with:

- A clear description of the issue.
- Steps to reproduce.
- Potential impact.
- Suggested fix, if available.

## Security Baseline

EventOS is designed to include:

- Prepared database statements.
- CSRF protection.
- XSS-safe rendering practices.
- Secure session defaults.
- Audit logging for sensitive actions.
- Least-privilege authorization.
- Dependency auditing in CI.
